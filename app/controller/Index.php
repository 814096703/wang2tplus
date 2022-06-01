<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;

include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/Wang.php");
include_once(__DIR__."/../api/MyTplusSdk.php");
include_once(__DIR__."/TplusApi.php");
include_once(__DIR__."/TplusApi2.php");
include_once(__DIR__."/TplusApi3.php");
include_once(__DIR__."/../api/util.php");

class Index extends BaseController
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function test(){
        // $range =  stockIn('2022-02-23 00:00:00', '2022-02-25 00:00:00');
        // $range =  dealStockInTransfer('2022-02-24 00:00:00', '2022-02-25 00:00:00');
        $range =  stockOut('2022-04-01 00:00:00', '2022-04-10 00:00:00');
        
        dump($range);
        
        // echo date("Y-m-d H:i:s", strtotime('2022-02-11'));

    }

    public function startStockIn(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=stockIn($rangeTime['start'], $rangeTime['end']);
                sleep(1);
            }
            return $msg;
            // return stockIn($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

    public function startDealStockInOther(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockInOther($rangeTime['start'], $rangeTime['end']);
                sleep(1);
            }
            return $msg;
            // return dealStockInOther($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockInPd(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockInPd($rangeTime['start'], $rangeTime['end']);
                sleep(2);
            }
            return $msg;
            // return dealStockInPd($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockInTransfer(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockInTransfer($rangeTime['start'], $rangeTime['end']);
                sleep(1);
            }
            return $msg;
            // return dealStockInTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startStockOut(){

        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $endTime = date("Y-m-d H:i:s", strtotime("$endTime - 1 days"));
            // echo $startTime;
            // echo $endTime;
            $res = stockOut($startTime, $endTime);
            return $res;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutOther(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockOutOther($rangeTime['start'], $rangeTime['end']);
                sleep(1);
            }
            return $msg;
            // return dealStockOutOther($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutPd(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockOutPd($rangeTime['start'], $rangeTime['end']);
                sleep(2);
            }
            return $msg;
            // return dealStockOutPd($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutTransfer(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                $msg.=dealStockOutTransfer($rangeTime['start'], $rangeTime['end']);
                sleep(1);
            }
            return $msg;
            // return dealStockOutTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

}

function getInfoArr($warehouse_no){
    
    $infoArr = [];
    if(in_array($warehouse_no, explode(',', env('Warehouse.xishuicun')))){
        $infoArr['appKey'] = env('TPLUS.appKey');
        $infoArr['appSecret'] = env('TPLUS.appSecret');
        $infoArr['token'] = getOpenToken();
    }
    if(in_array($warehouse_no, explode(',', env('Warehouse.hangyi')))){
        $infoArr['appKey'] = env('TPLUS2.appKey');
        $infoArr['appSecret'] = env('TPLUS2.appSecret');
        $infoArr['token'] = TplusApi2::getOpenToken();
    }
    if(in_array($warehouse_no, explode(',', env('Warehouse.liangchen')))){
        $infoArr['appKey'] = env('TPLUS3.appKey');
        $infoArr['appSecret'] = env('TPLUS3.appSecret');
        $infoArr['token'] = TplusApi3::getOpenToken();
    }
    
    return $infoArr;
}

// 采购入库单
function stockIn($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinPurchase($st, $et, $pageSize, 0);

    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购入库'.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = stockinPurchase($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockIn($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'采购入库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
                    }
                }
               
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    

    return $msg;
}

function w2tStockIn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
                Unit:{Name:"'.$item->unit_name.'"},
            Quantity: '.$item->num.',
            Amount: '.$item->total_cost.',
            Price: '.$item->cost_price.',
            taxAmount: '.$item->tax_amount.',
            taxPrice: '.$item->tax_price.',
            TaxRate: '.(floatval($item->tax)/100).'
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
    
    $res = purchaseReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    
    return $res;
}

// 销售出库单
function stockOut($st, $et){
    $pagesize = 20;
    $msg = '';
    
    $rangeTimeArrOut = getRangeTimeArr($st, $et);
    foreach($rangeTimeArrOut as $rangeTimeOut){
        if(strtotime($rangeTimeOut['start'])!=strtotime(date("Y-m-d"))){
            $day_count = 0;
            $orders = [];
            // 获取一天24小时时间段
            $rangeTimeArr = getDayHours($rangeTimeOut['start']);
        
            // 获取一天24小时的全部订单
            foreach($rangeTimeArr as $rangeTime){
                
                $wangData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, 1);
                
                if($wangData->status==0){
                    
                    $total = $wangData->data->total_count;
                    $day_count+=$total;
                    if($total>0){
                        
                        $pages = intval($total / $pagesize);
                        if($total % $pagesize != 0){
                            $pages += 1;
                        }
                        for($page=1; $page<=$pages; $page++){
                            $pageData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, $page);
                            $orders = array_merge($orders, $pageData->data->order);
                        }
                    }
                }
            }
            $msg=$msg.'销售出库'.date("Y-m-d", strtotime($rangeTimeOut['start'])).' 查询到'.$day_count."条数据".PHP_EOL;
            $handmakeOrder = []; // 手工建单的订单
            $apiOrder = []; // 接口抓取的订单
        
            // 检查订单是否已录入，并将订单分类
            foreach($orders as $order){
                // 只记录账套中存在仓库的订单
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    if(!$row){
                        // dump($order);
                        // trade_from=2 手工建单 trade_from=3 导入
                        if($order->trade_from==2 || $order->trade_from==3){
                            array_push($handmakeOrder, $order);
                        }
                        if($order->trade_from==1){ // trade_from=1 API抓单 
                            array_push($apiOrder, $order);
                        }
                    }
                }
                
            }
            // 手工建单 单张录入t+
            if(count($handmakeOrder)>0){
                
                foreach($handmakeOrder as $order){
                    // 单据录入到t+
                    $res = w2tStockOut($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'销售出库单'];
                        Db::table('voucher_log')->insert($newRow);
                    }else{
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }        
                }
            }

            // 对抓取的订单根据店铺和仓库进行细分
            $warehouseUsed = [];

            $shopUsed = [];
            foreach($apiOrder as $order){
                if(!in_array($order->shop_no, $shopUsed)){
                    array_push($shopUsed, $order->shop_no);
                }
                if(!in_array($order->warehouse_no, $warehouseUsed)){
                    array_push($warehouseUsed, $order->warehouse_no);
                }
            }

            $devideOrders = [];
            foreach($warehouseUsed as $warehouse){
                foreach($shopUsed as $shop){
                    $devideOrders[$warehouse][$shop] = [];
                    foreach($apiOrder as $order){
                        if($order->warehouse_no==$warehouse && $order->shop_no==$shop){
                            array_push($devideOrders[$warehouse][$shop], $order);
                        }
                    }
                    
                }
            }
            

            // 接口抓取 合并录入t+
            foreach($warehouseUsed as $warehouse){
                foreach($shopUsed as $shop){
                    $mixOrders = $devideOrders[$warehouse][$shop];
                    if(count($mixOrders)>0){
                        $mixRes = w2tStockOutMany($mixOrders);
                        if($mixRes=='null'){
                            foreach($mixOrders as $order){
                                $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'销售出库单'];
                                Db::table('voucher_log')->insert($newRow);
                            }
                        }else{
                            $str = '';
                            foreach($mixOrders as $order){
                                $str.=$order->order_no.', ';
                            }
                            $msg.="合并录入失败：".$str.",".$mixRes.PHP_EOL;
                        }
                    }
                }
            }
        }
        sleep(1);
    }
    return $msg;
    
}

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
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$w_order->shop_no.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Clerk: {
                Code: "'.$w_order->salesman_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
   
    return $res;
}

function w2tStockOutMany($orders){
    
    $details = '';
    foreach($orders as $key=>$w_order){
        foreach($w_order->details_list as $item){

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
            $details.=$detail.',';
        }
        if(count($orders)==($key+1)){
            
            $details = substr($details,0,strlen($details)-1);
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$orders[0]->shop_no.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($orders[0]->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$orders[0]->warehouse_no.'"
            },
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';


    $infoArr = getInfoArr($orders[0]->warehouse_no);
    // dump($infoArr);
    $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = saleDispatchCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
   
    return $res;
}

// 其他入库单
function dealStockInOther($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinOther($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinOther($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockInOther($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'其他入库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
    
    // 转化为t+数据格式
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
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
   
    $infoArr = getInfoArr($w_order->warehouse_no);
    $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherReceiveCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
   
    return $res;
}

// 其他出库单
function dealStockOutOther($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockOutOther($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockOutOther($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockOutOther($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'其他出库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherDispatchCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
    
    return $res;
}

// 盘点入库单
function dealStockInPd($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdInDetail($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockInPd($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'盘点入库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherReceiveCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
    
    return $res;
}

// 盘点出库单
function dealStockOutPd($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdOutDetail($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                // echo $page;
                $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                if(in_array($order->warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockOutPd($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'盘点出库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherDispatchCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);

    return $res;
}

// 调拨入库单
function dealStockInTransfer($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinTransfer($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinTransfer($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                if(in_array($order->to_warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->to_warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->to_warehouse_no, explode(',', env('Warehouse.liangchen')))){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockInTransfer($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'调拨入库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherReceiveCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
   
    return $res;
}

// 调拨出库单
function dealStockOutTransfer($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockoutTransfer($st, $et, $pageSize, 0);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockoutTransfer($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                if(in_array($order->from_warehouse_no, explode(',', env('Warehouse.xishuicun'))) 
                || in_array($order->from_warehouse_no, explode(',', env('Warehouse.hangyi'))) 
                || in_array($order->from_warehouse_no, explode(',', env('Warehouse.liangchen')))){
                    // 查询单据是否已转到t+
                    $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                    
                    if(!$row){
                        // dump($order);
                        // 单据录入到t+
                        $res = w2tStockOutTransfer($order);
                        
                        if($res == 'null'){
                            // 单据信息录入到数据库
                            $newRow = ['voucher_id'=>$order->order_no, 'isSuccess'=>1, 'voucher_type'=>'调拨出库单'];
                            Db::table('voucher_log')->insert($newRow);
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        
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
                Code: "'.$w_order->to_warehouse_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
    
    $infoArr = getInfoArr($w_order->from_warehouse_no);
    $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    // $res = otherDispatchCreate(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
    
    return $res;
}
