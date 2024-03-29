<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\helper\Arr;

include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/Wang.php");
include_once(__DIR__."/../api/MyTplusSdk.php");
include_once(__DIR__."/TplusApi.php");
include_once(__DIR__."/TplusApi2.php");
include_once(__DIR__."/TplusApi3.php");
include_once(__DIR__."/../api/util.php");

class Index extends BaseController
{

    public function refreshRow(){
        $id = $_GET['id'];
        $msg = '';
        $row = Db::table('fa_order')->where('id',$id)->find();

        if(!$row){
            $msg='不存在记录';
        }
        elseif($row['status']=='已同步'){
            $msg='已同步';
        }
        elseif($row['status']=='未同步'){
            
            $order = json_decode($row['order_detail']);
            
            $res = '{"message": "没有找到对应同步方法"}';

            switch($row['order_type']){
                case '采购入库单':
                    $res = w2tStockIn($order);
                    break;
                case '采购入库单(退)':
                    $res = w2tPurchaseReturn($order);
                    break;
                case '其他入库单':
                    $res = w2tStockInOther($order);
                    break;
                case '盘点入库单':
                    $res = w2tStockInPd($order);
                    break;
                case '调拨入库单':
                    $res = w2tStockInTransfer($order);
                    break;
                case '其他出库单':
                    $res = w2tStockOutOther($order);
                    break;
                case '盘点出库单':
                    $res = w2tStockOutPd($order);
                    break;
                case '调拨出库单':
                    $res = w2tStockOutTransfer($order);
                    break;
                case '销售出库单(退)':
                    $res = w2tStockOutRefund($order);
                    break;
                case '销售出库单':
                    $res = w2tStockOut($order);
                    break;
            }
            
            if($res=='null'){
                // 单据信息录入到数据库
                $row['status'] = '已同步';
                $row['result'] = '已同步';
                $msg.="同步成功：".$row['result'];
            }else{
                $row['result'] = translateErrMsg(json_decode($res)->message);
                $msg.="同步失败：".$row['result'];
                
            }
            Db::table('fa_order')->update($row);
        }
        

        $result = [
            'msg'=>$id.' '.$msg,
            'code'=>200,
        ];
        return json($result);
    }

    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function checkOrderWh(){
        $days = 0;
        
        $st = date("Y-m-d", strtotime('-'.($days+1).' day')).' 00:00:00';
        $et = date("Y-m-d", strtotime('-'.$days.' day')).' 00:00:00';
        $orders = Db::table('fa_order')
        ->where('order_time', 'between time', [$st, $et])
        ->where('order_type', '销售出库单')
        ->where('status', '已同步')
        ->select();
        $shopArr = [];
        foreach($orders as $order){
            $d = json_decode($order['order_detail']);
            if(!array_key_exists($d->shop_no, $shopArr)) {
                $shopArr[$d->shop_no] = [];
            }
            if(!array_key_exists($d->warehouse_no, $shopArr[$d->shop_no])){
                $shopArr[$d->shop_no][$d->warehouse_no] = [];
            }
            array_push($shopArr[$d->shop_no][$d->warehouse_no], $d->order_no);
        }
        dump($shopArr);

        // $dateArr = [];
        // for($i=0;$i<$days;$i++){
        //     $st = date("Y-m-d", strtotime('-'.($i+1).' day')).' 00:00:00';
        //     $et = date("Y-m-d", strtotime('-'.$i.' day')).' 00:00:00';
        //     $orders = Db::table('fa_order')
        //     ->where('order_time', 'between time', [$st, $et])
        //     ->where('order_type', '销售出库单')
        //     ->count();
        //     $dateArr[$st] = $orders;
        // }
        
        // dump($dateArr);
        return $st;
    }

    public function test(){
        $st = '2022-06-01 00:00:00';
        $et = '2022-06-30 00:00:00';

        $targetUrl = 'http://zjyyhlgyl.gnway.vip:15786';
        echo("开始同步\n");
        echo($targetUrl.'/index.php/Index/handTransLocal?startTime='.strtotime($st).'&&endTime='.strtotime($et));

    }

    public function handTrans(){
        $order_no = $_GET['order_data'];
        $order_type = $_GET['order_type'];

        $types = [
            '采购入库单'=>[
                'wdt_api'=>'stockinPurchase',
                'wdt2tplus_api'=>'w2tStockIn'
            ],
            '采购入库单(退)'=>[
                'wdt_api'=>'wangPurchaseReturnQueryWithDetail',
                'wdt2tplus_api'=>'w2tPurchaseReturn'
            ],
            '其他入库单'=>[
                'wdt_api'=>'wangStockinOther',
                'wdt2tplus_api'=>'w2tStockInOther'
            ],
            '盘点入库单'=>[
                'wdt_api'=>'wangQueryStockPdInDetail',
                'wdt2tplus_api'=>'w2tStockInPd'
            ],
            '调拨入库单'=>[
                'wdt_api'=>'wangStockinTransfer',
                'wdt2tplus_api'=>'w2tStockInTransfer'
            ],
            '其他出库单'=>[
                'wdt_api'=>'wangStockOutOther',
                'wdt2tplus_api'=>'w2tStockOutOther'
            ],
            '盘点出库单'=>[
                'wdt_api'=>'wangQueryStockPdOutDetail',
                'wdt2tplus_api'=>'w2tStockOutPd'
            ],
            '调拨出库单'=>[
                'wdt_api'=>'wangStockoutTransfer',
                'wdt2tplus_api'=>'w2tStockOutTransfer'
            ]
            // '销售出库单(退)'=>[
            //     'wdt_api'=>'',
            //     'wdt2tplus_api'=>'w2tStockIn'
            // ],
        ];

        try {
            $w_order = $types[$order_type]['wdt_api']($order_no);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function handTransLocal(){
        $types = [
            '采购入库单'=>[
                'wdt_api'=>'stockinPurchase',
                'wdt2tplus_api'=>'app\controller\w2tStockIn'
            ],
            '采购入库单(退)'=>[
                'wdt_api'=>'wangPurchaseReturnQueryWithDetail',
                'wdt2tplus_api'=>'app\controller\w2tPurchaseReturn'
            ],
            '其他入库单'=>[
                'wdt_api'=>'wangStockinOther',
                'wdt2tplus_api'=>'app\controller\w2tStockInOther'
            ],
            '盘点入库单'=>[
                'wdt_api'=>'wangQueryStockPdInDetail',
                'wdt2tplus_api'=>'app\controller\w2tStockInPd'
            ],
            '调拨入库单'=>[
                'wdt_api'=>'wangStockinTransfer',
                'wdt2tplus_api'=>'app\controller\w2tStockInTransfer'
            ],
            '其他出库单'=>[
                'wdt_api'=>'wangStockOutOther',
                'wdt2tplus_api'=>'app\controller\w2tStockOutOther'
            ],
            '盘点出库单'=>[
                'wdt_api'=>'wangQueryStockPdOutDetail',
                'wdt2tplus_api'=>'app\controller\w2tStockOutPd'
            ],
            '调拨出库单'=>[
                'wdt_api'=>'wangStockoutTransfer',
                'wdt2tplus_api'=>'app\controller\w2tStockOutTransfer'
            ],
            '销售出库单(退)'=>[
                'wdt_api'=>'stockinPurchase',
                'wdt2tplus_api'=>'app\controller\w2tStockOutRefund'
            ],
        ];
        // 获取时间
        $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
        $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
        // 查找数据库的中的数据
        $total = $orderRows = Db::table('fa_order')
        ->where('status', '未同步')
        ->whereTime('order_time', '>=', $startTime)
        ->whereTime('order_time', '<=', $endTime)
        ->count();
        
        // 循环处理单据数据
        
        $pageSize = 50;
        $pages = intval($total / $pageSize);
        if($total % $pageSize != 0){
            $pages += 1;
        }
        for($page=0; $page<$pages; $page++){
            $orderRows = Db::table('fa_order')
            ->where('status', '未同步')
            ->whereTime('order_time', '>=', $startTime)
            ->whereTime('order_time', '<=', $endTime)
            ->limit($page*$pageSize, ($page+1)*$pageSize)
            ->select();
            foreach($orderRows as $row){
                echo $row['order_num'];
                echo $row['order_type'];
                $fn = $types[$row['order_type']]['wdt2tplus_api'];
                echo $fn;
                $w_order = json_decode($row['order_detail']);
                $res = $fn($w_order);
                
                if($res=='null'){
                    // 单据信息录入到数据库
                    $row['status'] = '已同步';
                    $row['result'] = '已同步';
                }else{
                    $row['result'] = translateErrMsg(json_decode($res)->message);
                    if(strstr($row['result'], '请尝试修改该编号中的流水号后再操作')!=false){
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }
                }
                Db::table('fa_order')->update($row);
            }
        }
        
    }

    // 采购入库单
    public function startStockIn(){

        try {
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = 'in function ';
            
            foreach($warehouseArr as $warehouse){
                $msg.='in loop ';
                $msg.=stockIn($startTime, $endTime, $warehouse);
                sleep(1);
            }
                
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 其他入库单
    public function startDealStockInOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockInOther($startTime, $endTime, $wh);
                sleep(1);
            }
        
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 盘点入库单
    public function startDealStockInPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockInPd($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 调拨入库单(不支持按仓库查询)
    public function startDealStockInTransfer(){
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
        
            $msg.=dealStockInTransfer($startTime, $endTime);
            
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

    // 其他出库单
    public function startDealStockOutOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutOther($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 盘点出库单
    public function startDealStockOutPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutPd($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 调拨出库单
    public function startDealStockOutTransfer(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutTransfer($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 销售出库单(退)
    public function startDealStockOSutRefund(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
            foreach($warehouseArr as $wh){
                $msg.=stockOutRefund($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 采购入库单(退)
    public function startDealPurchaseReturn(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        
        $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
        $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
        $msg = '';
        
        foreach($warehouseArr as $wh){
            
            try {
                $msg.=purchaseReturn($startTime, $endTime, $wh);
            } catch (\Throwable $th) {
                //throw $th;
                return $wh['wh_code'].'出现错误：'.$th;
            }
            sleep(1);
        }
        
        return $msg;    
        
    }
}

function getInfoArr($warehouse_no){
    // 仓库编码查找仓库
    $warehouse = Db::table('fa_warehouse')
        ->where('wh_code', $warehouse_no)
        ->where('wh_type', '账套仓')
        ->find();
    
    $infoArr = [];
    
    // 判断是否为账套仓
    if($warehouse){
        // 根据仓库中的账套编码返回接口必须信息
        if($warehouse['account_code']=='302'){
            $infoArr['appKey'] = env('TPLUS2.appKey');
            $infoArr['appSecret'] = env('TPLUS2.appSecret');
            $infoArr['token'] = TplusApi2::getOpenToken();
        }
        if($warehouse['account_code']=='301'){
            $infoArr['appKey'] = env('TPLUS.appKey');
            $infoArr['appSecret'] = env('TPLUS.appSecret');
            $infoArr['token'] = getOpenToken();
        }
        if($warehouse['account_code']=='303'){
            $infoArr['appKey'] = env('TPLUS3.appKey');
            $infoArr['appSecret'] = env('TPLUS3.appSecret');
            $infoArr['token'] = TplusApi3::getOpenToken();
        }
        if($warehouse['account_code']=='305'){
            $infoArr['appKey'] = env('TPLUS4.appKey');
            $infoArr['appSecret'] = env('TPLUS4.appSecret');
            $infoArr['token'] = TplusApi4::getOpenToken();
        }
    }
   
    
    return $infoArr;
}

function getInfoArrByshop($shop_no){
    // 仓库编码查找仓库
    $shop = Db::table('fa_shop')
        ->where('shop_no', $shop_no)
        ->find();
    
    $infoArr = [];
   
    // 根据仓库中的账套编码返回接口必须信息
    if($shop['account_code']=='302'){
        $infoArr['appKey'] = env('TPLUS2.appKey');
        $infoArr['appSecret'] = env('TPLUS2.appSecret');
        $infoArr['token'] = TplusApi2::getOpenToken();
    }
    if($shop['account_code']=='301'){
        $infoArr['appKey'] = env('TPLUS.appKey');
        $infoArr['appSecret'] = env('TPLUS.appSecret');
        $infoArr['token'] = getOpenToken();
    }
    if($shop['account_code']=='303'){
        $infoArr['appKey'] = env('TPLUS3.appKey');
        $infoArr['appSecret'] = env('TPLUS3.appSecret');
        $infoArr['token'] = TplusApi3::getOpenToken();
    }
    if($shop['account_code']=='305'){
        $infoArr['appKey'] = env('TPLUS4.appKey');
        $infoArr['appSecret'] = env('TPLUS4.appSecret');
        $infoArr['token'] = TplusApi4::getOpenToken();
    }
    
    return $infoArr;
}

// 采购入库单
function stockIn($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinPurchase($st, $et, $pageSize, 0, $warehouse['wh_code']);
    // dump($wangData);

    if(isset($wangData->status) && $wangData->status==0){
        // $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                // $orders = array_merge($orders, $pageData->data->order);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->modified/1000,
                            'order_type'=>'采购入库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockIn($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                    }else if($row['status']=='未同步'){
                        $res = w2tStockIn($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                    
                }
                sleep(1);
            }
            
        }
    }else{
        $msg .= '旺店通接口错误.PHP_EOL';
        trace($warehouse['wh_code'].$st.json_encode($wangData), 'info');
    }

    return $msg;
}

function w2tStockIn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        // $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            "Inventory": {
                Code: "'.$item->spec_no.'"
            },
            "Unit":{Name:"'.$item->unit_name.'"},
            "Quantity": '.$item->num.',
            
            "Price": '.$item->tax_price/1.13.',
            "Amount": '.$item->tax_amount/1.13.',
            "TaxRate": 0.13
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1001"
            },
            Partner: {
                Code: "'.$w_order->provider_no.'"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->created_time/1000).'",
            BusiType: {
                Code: "01"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // echo($content);
    $infoArr = getInfoArr($w_order->warehouse_no);
    if(count($infoArr)>0){
        $res = purchaseReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    
    
    return $res;
}

// 采购入库单(退)
function purchaseReturn($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);

    if(isset($wangData->status) && $wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'采购退货出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $msg.='正在拉取第'.($page+1).'页数据，共'.($page+1).'页'.PHP_EOL;
                $pageData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->consign_time/1000,
                            'order_type'=>'采购入库单(退)',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tPurchaseReturn($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                    }else if($row['status']=='未同步'){
                        $res = w2tPurchaseReturn($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                    
                   
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
        trace($warehouse['wh_code'].$st.json_encode($wangData), 'info');
    }

    return $msg;
}

function w2tPurchaseReturn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        // $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            "Inventory": {
                Code: "'.$item->spec_no.'"
            },
            "Unit":{Name:"'.$item->goods_unit.'"},
            "Quantity": '.-$item->goods_count.',
            "Price": '.$item->sell_price/1.13.',
            "DynamicPropertyKeys": ["pubuserdefnvc2"],
            "DynamicPropertyValues": ["'.$w_order->src_order_no.'"],
            "TaxRate": 0.13
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1001"
            },
            Partner: {
                Code: "'.$w_order->provider_no.'"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->create_time/1000).'",
            BusiType: {
                Code: "02"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // echo($content);
    $infoArr = getInfoArr($w_order->warehouse_no);
    if(count($infoArr)>0){
        $res = purchaseReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    
    
    return $res;
}



// 销售出库wdt到t+ 单张录入
function w2tStockOut($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){

        $price = (floatval($item->cost_price)>=0.01 ? floatval($item->cost_price) : 0);
        $amount =( floatval($item->total_amount)>=0.01 ? floatval($item->total_amount) : 0);
        
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.',
            Price: '.$price.',
            Amount: '.$amount.',
            origTaxSalePrice: '.$item->sell_price.',
            IsPresent: '.($item->gift_type?'true':'false').',
            DynamicPropertyKeys: ["pubuserdefnvc1", "pubuserdefnvc2", "pubuserdefnvc3"],
            DynamicPropertyValues: ["'.$w_order->src_trade_no.'", "'.$w_order->src_order_no.'", "'.$w_order->order_no.'"]
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }

    $partner='';
    $saleman='';
    // 店铺名包含 '公司' ,客户网名作为客户，有业务员，不合并
    // 网店，店铺作为客户，合并随意，没有业务员
    if(strstr($w_order->shop_name, '公司')==false){
        $partner=$w_order->shop_no;
        
    }else{
        // $partner=$w_order->customer_no;
        $partner=property_exists($w_order, 'customer_no')? $w_order->customer_no: '';
        $saleman = 'Clerk: {
            Code: "'.$w_order->salesman_no.'"
        },';
    }
     
    $memo = $w_order->remark;
    $memo = trim($memo, '"');
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$partner.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            '.$saleman.'
            Memo: "'.$memo.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // dump($content);
    $infoArr = getInfoArrByshop($w_order->shop_no);
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
       
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$w_order->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        // echo('res='.$res.'end');
    }

    return $res;
}

// 销售出库单(退)
function stockOutRefund($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinRefund($st, $et, $pageSize, 1, $warehouse['wh_code']);

    if(isset($wangData->status) && $wangData->status==0){
       
        $total = $wangData->data->total_count;
        $msg=$msg.'销售出库单(退) '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=1; $page<=$pages; $page++){
                $pageData = stockinRefund($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>strtotime($order->modified),
                            'order_type'=>'销售出库单(退)',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockOutRefund($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        try {
                            //code...
                            Db::table('fa_order')->insert($newRow);
                        } catch (\Throwable $th) {
                            // dump($newRow);
                            echo $th;
                        }
                        
                    }else if($row['status']=='未同步'){
                        $res = w2tStockOutRefund($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                           
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        try {
                            //code...
                            Db::table('fa_order')->update($row);
                        } catch (\Throwable $th) {
                            // dump($row);
                            echo $th;
                        }
                        
                    }
                    
                   
                }
            }
        }
    }else{
        trace($warehouse['wh_code'].$st.json_encode($wangData), 'info');
        $msg .= '旺店通接口错误';
    }

    return $msg;
}

// wdt退货入库单做成t+销售出库单的负数
function w2tStockOutRefund($w_order){
    
    $refundData = refundSearch($w_order->refund_no, 10, 1);
    $refundOrder = $refundData->data->order[0];

    $details = '';
    foreach($w_order->details_list as $key=>$item){
        $price = count($item->refund_order_detail_list)>0
                ? $item->refund_order_detail_list[0]->price
                : $item->checked_cost_price;
        
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.-$item->num.',
            origTaxSalePrice: '.$price.',
            DynamicPropertyKeys: ["pubuserdefnvc1", "pubuserdefnvc2", "pubuserdefnvc3"],
            DynamicPropertyValues: ["'.$w_order->trade_no_list.'", "'.$w_order->refund_no.'", "'.$w_order->order_no.'"]
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }

    $partner='';
    $saleman='';
    // 店铺名包含 '公司' ,客户网名作为客户，有业务员，不合并
    // 网店，店铺作为客户，合并随意，没有业务员
    if(strstr($w_order->shop_name, '公司')==false){
        $partner=$w_order->shop_no;
        
    }else{
        $partner=$w_order->customer_no;
        $saleman = 'Clerk: {
            Code: "'.$w_order->operator_name.'"
        },';
    }
     
    $memo = '备注：'.$w_order->remark.'；退还备注：'.$refundOrder->remark;
    $submemo = substr($memo, 0 ,180);
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$partner.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->modified)).'",
            BusiType: {
                Code: "16"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            '.$saleman.'
            Memo: "'.$submemo.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // dump($content);
    $infoArr = getInfoArrByshop($w_order->shop_no);
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$w_order->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        // echo('res='.$res.'end');
    }

    return $res;
}

// 其他入库单
function dealStockInOther($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'其他入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->stockin_time/1000,
                            'order_type'=>'其他入库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockInOther($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                        
                    }else if($row['status']=='未同步'){
                        $res = w2tStockInOther($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                    
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInOther($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式             IsModifiedCode:"false",
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1004"
            },
            Partner: {
                Code: "0010001"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->stockin_time/1000).'",
            BusiType: {
                Code: "13"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',其他入库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
   
    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 其他出库单
function dealStockOutOther($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockOutOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'其他出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockOutOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->modified/1000,
                            'order_type'=>'其他出库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockOutOther($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                        
                    }else if($row['status']=='未同步'){
                        $res = w2tStockOutOther($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutOther($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
            VoucherType: {
                Code: "ST1024"
            },
            Partner: {
                Code: "0010001"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "13"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',其他出库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点入库单
function dealStockInPd($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdInDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'盘点入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->stockin_time/1000,
                            'order_type'=>'其他入库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockInPd($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                        
                    }else if($row['status']=='未同步'){
                        $res = w2tStockInPd($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                    
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInPd($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
           
            VoucherType: {
                Code: "ST1004"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->stockin_time/1000).'",
            BusiType: {
                Code: "08"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',盘点入库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点出库单
function dealStockOutPd($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdOutDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'盘点出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                // echo $page;
                $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->consign_time/1000,
                            'order_type'=>'盘点出库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockOutPd($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                    }else if($row['status']=='未同步'){
                        $res = w2tStockOutPd($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutPd($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
            VoucherType: {
                Code: "ST1024"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "25"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',盘点出库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨入库单
function dealStockInTransfer($st, $et){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    try {
        //code...
        $wangData = wangStockinTransfer($st, $et, $pageSize, 0);
    } catch (\Throwable $th) {
        //throw $th;
        return $th;
    }
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'调拨入库单 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinTransfer($st, $et, $pageSize, $page);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$order->to_warehouse_name,
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->modified/1000,
                            'order_type'=>'调拨入库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockInTransfer($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                    }else if($row['status']=='未同步'){
                        $res = w2tStockInTransfer($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                }
            }
           
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInTransfer($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->num.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",

            VoucherType: {
                Code: "ST1004"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->created_time/1000).'",
            BusiType: {
                Code: "78"
            },
            Warehouse: {
                Code: "'.$w_order->to_warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.','.$w_order->src_order_no.',调拨入库单,源仓库：'.$w_order->from_warehouse_name.','.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
    // trace($content, 'info'); 
    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    // var_dump($infoArr);
    // $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        trace($res, 'info'); 
    }
    // else if(count($infoArr2)>0){
    //     $res = otherReceiveCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    // }
    else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }


    
    sleep(1);
    return $res;
}

// 调拨出库单
function dealStockOutTransfer($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    try {
        //code...
        $wangData = wangStockoutTransfer($st, $et, $pageSize, 0, $warehouse['wh_code']);
    } catch (\Throwable $th) {
        //throw $th;
        return $th;
    }
    // 查询旺店通单据
    
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'调拨出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockoutTransfer($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->consign_time/1000,
                            'order_type'=>'调拨出库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockOutTransfer($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow);
                    }else if($row['status']=='未同步'){
                        $res = w2tStockOutTransfer($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutTransfer($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 查询仓库名
    $warehouse = Db::table('fa_warehouse')
        ->where('wh_code', $w_order->to_warehouse_no)
        ->find();
    $warehouseName = $warehouse? $warehouse['wh_name']: '';
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
            VoucherType: {
                Code: "ST1024"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "78"
            },
            Warehouse: {
                Code: "'.$w_order->from_warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.','.$w_order->src_order_no.',调拨出库单,入'.$warehouseName.','.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
    
    // $infoArr = getInfoArr($w_order->to_warehouse_no);
    $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // if(count($infoArr)>0){
    //     $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // }else 
    if(count($infoArr2)>0){
        $res = otherDispatchCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    }
    // else if(count($infoArr)>0){
    //     $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // }
    else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    sleep(1);
    return $res;
}
