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
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function test(){
        // $range =  stockIn('2022-06-01 00:00:00', '2022-06-01 23:59:59', '12');
        // $range = dealStockInTransfer('2022-06-01 00:00:00', '2022-06-06 00:00:00');
        // $range = dealStockOutTransfer('2022-06-01 00:00:00', '2022-06-04 00:00:00', $warehouse);
        $warehouse = Db::table('fa_warehouse')->where('wh_code', '01')->find();
        $range =  stockOutRefund('2022-06-01 00:00:00', '2022-06-02 00:00:00', $warehouse);
        
        dump($range);
        
        // echo date("Y-m-d H:i:s", strtotime('2022-02-11'));
        // addWh();
        // $warehouseArr = Db::table('fa_warehouse')->select();
        // dump($warehouseArr);
        // foreach($warehouseArr as $warehouse){
        //     echo $warehouse['wh_code'].'\n';
        // }
        // $res = '{
        //     "actual_refund_amount":"103.2100",
        //     "check_time":"1654132596000",
        //     "created_time":"1654132596000",
        //     "customer_no":"KH202205180044",
        //     "details_list":[
        //         {
        //             "batch_no":"",
        //             "brand_name":"咸亨",
        //             "brand_no":"21",
        //             "checked_cost_price":"0.0000",
        //             "defect":false,
        //             "expire_date":"",
        //             "goods_name":"500ml*6咸亨清醇3年",
        //             "goods_no":"XIANHENG09",
        //             "goods_unit":"无",
        //             "logistics_id":0,
        //             "logistics_name":"无",
        //             "logistics_no":"DPK300520635988",
        //             "num":"2.0000",
        //             "position_no":"销退暂存",
        //             "prop2":"",
        //             "rec_id":35513,
        //             "refund_detail_id":"44225",
        //             "refund_order_detail_list":[
        //                 {
        //                     "price":"0.0000",
        //                     "refund_order_id":44225,
        //                     "spec_no":"咸亨09",
        //                     "stockin_order_detail_id":35513
        //                 }
        //             ],
        //             "remark":"",
        //             "right_num":"2.0000",
        //             "spec_code":"",
        //             "spec_name":"500ml*6咸亨清醇3年",
        //             "spec_no":"咸亨09",
        //             "src_order_id":39238,
        //             "stockin_id":16245,
        //             "total_cost":"0.0000",
        //             "warehouse_id":1
        //         },
        //         {
        //             "batch_no":"",
        //             "brand_name":"咸亨",
        //             "brand_no":"21",
        //             "checked_cost_price":"8.0558",
        //             "defect":false,
        //             "expire_date":"",
        //             "goods_name":"500ml*12咸亨雕皇黑标扁瓶",
        //             "goods_no":"XIANHENG18",
        //             "goods_unit":"无",
        //             "logistics_id":0,
        //             "logistics_name":"无",
        //             "logistics_no":"DPK300520635988",
        //             "num":"10.0000",
        //             "position_no":"销退暂存",
        //             "prop2":"",
        //             "rec_id":35512,
        //             "refund_detail_id":"44224",
        //             "refund_order_detail_list":[
        //                 {
        //                     "price":"10.3210",
        //                     "refund_order_id":44224,
        //                     "spec_no":"咸亨18",
        //                     "stockin_order_detail_id":35512
        //                 }
        //             ],
        //             "remark":"",
        //             "right_num":"10.0000",
        //             "spec_code":"",
        //             "spec_name":"500ml*12咸亨雕皇黑标扁瓶",
        //             "spec_no":"咸亨18",
        //             "src_order_id":39238,
        //             "stockin_id":16245,
        //             "total_cost":"80.5710",
        //             "warehouse_id":1
        //         }
        //     ],
        //     "fenxiao_nick":"",
        //     "flag_name":"",
        //     "goods_count":"12.0000",
        //     "logistics_id":0,
        //     "logistics_name":"无",
        //     "logistics_no":"DPK300520635988",
        //     "modified":"2022-06-02 09:16:37",
        //     "operator_name":"李彩",
        //     "order_no":"RK2206020004",
        //     "refund_no":"TK2206020021",
        //     "remark":"----DPK300520635988",
        //     "shop_id":59,
        //     "shop_name":"习水村-天猫咸亨习水村专卖店",
        //     "shop_no":"A0011",
        //     "shop_platform_id":1,
        //     "shop_remark":"",
        //     "src_order_id":39238,
        //     "status":80,
        //     "stockin_id":16245,
        //     "tid_list":"1579146672348038681",
        //     "total_price":"80.5710",
        //     "trade_no_list":"JY202206010180",
        //     "warehouse_id":1,
        //     "warehouse_name":"萧山仓-杭州习水村",
        //     "warehouse_no":"01"
        // }';
        // $resJson = json_decode($res);
        // $infoArr = w2tStockOutRefund($resJson);
        // dump($infoArr);

    }

    public function startStockIn(){
        
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
            
            foreach($warehouseArr as $warehouse){
                $msg.=stockIn($startTime, $endTime, $warehouse);
                sleep(2);
            }
                
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

    public function startDealStockInOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockInOther($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockInPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockInPd($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(2);
                }
            }
            return $msg;
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
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startStockOut(){

        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $endTime = date("Y-m-d H:i:s", strtotime("$endTime - 1 days"));
            // echo $startTime;
            // echo $endTime;
            foreach($warehouseArr as $wh){
                $res = stockOut($startTime, $endTime, $wh);
            }
            
            return $res;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutOther($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            // return dealStockOutOther($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutPd($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(2);
                }
            }
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutTransfer(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutTransfer($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            // return dealStockOutTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
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
            // return dealStockOutTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealPurchaseReturn(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=purchaseReturn($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            // return dealStockOutTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
}

function addWh(){
    $shop_no = 'DS53,
            DS52,
            DS80,
            DS76,
            DS74,
            DS71,
            DS69,
            DS66,
            DS64,
            DS63,
            DS59,
            DS57,
            DS60,
            DS55,
            DS54,
            A0013,
            A0011,
            DS33,
            A0008,
            A0007,
            A0006,
            21,
            DS146,
            DS145,
            B1022,
            DS51,
            DS46,
            DS44,
            06,
            DS31,
            DS34,
            DS24,
            DS26,
            DS83,
            ';
    $shop_name = '杭州习水村酒业有限公司,
        民酒汇（杭州）电子商务有限责任公司,
        民酒汇-抖音民酒汇酒类专营店,
        杭易-天猫惠群贵礼旗舰店,
        习水村-快手习水村酒类专营店,
        习水村-拼多多金沙回沙酒习水村专卖店,
        习水村-京东沱牌舍得专卖店,
        浙江良辰美酒贸易有限公司,
        良辰美酒-淘宝拍卖店,
        习水村-天猫丹泉习水村专卖店,
        习水村-抖音习水村酒类专营店,
        习水村-京东今世缘白酒旗舰店,
        习水村-天猫习酒习水村专卖店,
        习水村-天猫摘要习水村专卖店,
        习水村-天猫石库门习水村专卖店,
        习水村-天猫衡水老白干习水村专卖店,
        习水村-天猫咸亨习水村专卖店,
        杭易-天猫易元宏雷酒类专营店,
        习水村-拼多多惠峰酒类专营店,
        习水村-拼多多习酒习水村专卖店,
        习水村-拼多多盛峰酒类专营店,
        杭易-拼多多林川酒类专营店,
        杭易-拼多多致中和酒类旗舰店,
        杭易-拼多多易元宏雷酒类专营店,
        杭州易元宏雷贸易有限公司（非电商）,
        习水村-京东习酒酒类旗舰店,
        习水村-京东金沙酒类旗舰店,
        习水村-京东衡水老白干酒类旗舰店,
        杭易-京东易元宏雷官方旗舰店,
        杭易-京东咸亨旗舰店,
        杭易-京东致中和旗舰店,
        杭易-京东购喝旗舰店,
        杭易-京东浣纱坊旗舰店,
        习水村-天猫淘特店';
    $account_name = '习水村,
                    民酒汇,
                    民酒汇,
                    杭易,
                    习水村,
                    习水村,
                    习水村,
                    良辰美酒,
                    良辰美酒,
                    习水村,
                    习水村,
                    习水村,
                    习水村,
                    习水村,
                    习水村,
                    习水村,
                    习水村,
                    杭易,
                    习水村,
                    习水村,
                    习水村,
                    杭易,
                    杭易,
                    杭易,
                    杭易,
                    习水村,
                    习水村,
                    习水村,
                    杭易,
                    杭易,
                    杭易,
                    杭易,
                    杭易,
                    习水村';
    $account_code = '301,
                    305,
                    305,
                    302,
                    301,
                    301,
                    301,
                    303,
                    303,
                    301,
                    301,
                    301,
                    301,
                    301,
                    301,
                    301,
                    301,
                    302,
                    301,
                    301,
                    301,
                    302,
                    302,
                    302,
                    302,
                    301,
                    301,
                    301,
                    302,
                    302,
                    302,
                    302,
                    302,
                    301';
    $shop_no_arr = explode(',', $shop_no);
    $shop_name_arr = explode(',', $shop_name);
    $account_code_arr = explode(',', $account_code);
    $account_name_arr = explode(',', $account_name);
    $size = count($shop_no_arr);
    
    for($index=0; $index<$size; $index++){
        $row = [
            'shop_no'=>trim($shop_no_arr[$index]), 
            'shop_name'=>trim($shop_name_arr[$index]), 
            'account_code'=>trim($account_code_arr[$index]),
            'account_name'=>trim($account_name_arr[$index])
        ];
        Db::table('fa_shop')->insert($row);
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
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinPurchase($st, $et, $pageSize, 0, $warehouse['wh_code']);
    // dump($wangData);

    if($wangData->status==0){
        // $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购入库 '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $msg.='正在拉取第'.($page+1).'页数据，共'.($page+1).'页';
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
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
        $msg .= '旺店通接口错误';
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

// 采购退货出库单
function purchaseReturn($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    // dump($wangData);

    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购退货出库单 '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
        }
    }else{
        $msg .= '旺店通接口错误';
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
            "Price": '.$item->cost_price/1.13.',
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    
    
    return $res;
}

// 销售出库单
function stockOut($st, $et, $warehouse){
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
                
                $wangData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, 1, $warehouse['wh_code']);
                
                if($wangData->status==0){
                    
                    $total = $wangData->data->total_count;
                    $day_count+=$total;
                    if($total>0){
                        
                        $pages = intval($total / $pagesize);
                        if($total % $pagesize != 0){
                            $pages += 1;
                        }
                        for($page=1; $page<=$pages; $page++){
                            $pageData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, $page, $warehouse['wh_code']);
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
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                // $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                if(!$row || $row['status']=='未同步'){
                    // dump($order);
                    // trade_from=2 手工建单 trade_from=3 导入
                    // if($order->trade_from==2 || $order->trade_from==3){
                    //     array_push($handmakeOrder, $order);
                    // }
                    if($order->trade_from==1){ // trade_from=1 API抓单 
                        array_push($apiOrder, $order);
                    }else{
                        array_push($handmakeOrder, $order);
                    }
                }
                
                
            }
            // 手工建单 单张录入t+
            if(count($handmakeOrder)>0){
                
                foreach($handmakeOrder as $order){
                    // 单据录入到t+
                    $res = w2tStockOut($order);

                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    if(!$row){
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>strtotime($order->consign_time),
                            'order_type'=>'销售出库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            
                        }
                        Db::table('fa_order')->insert($newRow); 
                    }else{
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['order_detail'] = json_encode($order);
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                     
                }
            }

            // 对抓取的订单根据店铺进行细分
            $shopUsed = [];
            foreach($apiOrder as $order){
                if(!in_array($order->shop_no, $shopUsed)){
                    array_push($shopUsed, $order->shop_no);
                }
            }

            $devideOrders = [];
            
            foreach($shopUsed as $shop){
                $devideOrders[$shop] = [];
                foreach($apiOrder as $order){
                    if($order->shop_no==$shop){
                        array_push($devideOrders[$shop], $order);
                    }
                }
                
            }
            
            // 接口抓取 合并录入t+
            foreach($shopUsed as $shop){
                $mixOrders = $devideOrders[$shop];
                if(count($mixOrders)>0){
                    
                    $mixRes = w2tStockOutMany($mixOrders);
                    
                    if($mixRes=='null'){
                        foreach($mixOrders as $order){
                            $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                            if(!$row){
                                $newRow = [
                                    'warehouse'=>$warehouse['wh_name'],
                                    'order_num'=>$order->order_no, 
                                    'order_detail'=>json_encode($order), 
                                    'order_time'=>strtotime($order->consign_time),
                                    'order_type'=>'销售出库单',
                                    'status'=>'已同步',
                                    'result'=>'已同步',
                                ];
                                Db::table('fa_order')->insert($newRow);
                            }else{
                                $row['status'] = '已同步';
                                $row['result'] = '已同步';
                                Db::table('fa_order')->update($row);
                            }
                        }
                    }else{
                        $str = '';
                        $msg.="合并录入失败：".$str.",".$mixRes.PHP_EOL;
                        
                        foreach($mixOrders as $order){
                            $str.=$order->order_no.', ';
                            $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                            $errMsg = translateErrMsg(json_decode($mixRes)->message);
                            if(!$row){
                                
                                $newRow = [
                                    'warehouse'=>$warehouse['wh_name'],
                                    'order_num'=>$order->order_no, 
                                    'order_detail'=>json_encode($order), 
                                    'order_time'=>strtotime($order->consign_time),
                                    'order_type'=>'销售出库单',
                                    'status'=>'未同步',
                                    'result'=>"合并录入失败,部分单据存在问题：".$errMsg
                                ];
                                Db::table('fa_order')->insert($newRow);
                            }else{
                                
                                $row['result'] = "合并录入失败,部分单据存在问题：".$errMsg;
                                Db::table('fa_order')->update($row);
                            }
                        }
                        
                    }
                }
            }
            
        }
        sleep(1);
    }
    return $msg;
    
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
        $partner=$w_order->customer_no;
        $saleman = 'Clerk: {
            Code: "'.$w_order->salesman_no.'"
        },';
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
            Memo: "'.$w_order->cs_remark.'",
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
        echo('res='.$res.'end');
    }

    return $res;
}
// 销售出库wdt到t+ 合并录入
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
                DetailMemo: "'.$w_order->cs_remark.'",
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


    $infoArr = getInfoArrByshop($orders[0]->shop_no);
    
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$orders[0]->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        // echo('res='.$res.'end');
    }

    return $res;
}

// 销售退换货入库单
function stockOutRefund($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinRefund($st, $et, $pageSize, 1, $warehouse['wh_code']);
    dump($wangData);

    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'退换入库 '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
                        'order_type'=>'销售出库',
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
        }
    }else{
        $msg .= '旺店通接口错误';
    }

    return $msg;
}

// wdt退货入库单做成t+销售出库单的负数
function w2tStockOutRefund($w_order){
    sleep(1);
    $refundData = refundSearch($w_order->refund_no, 10, 1);
    $refundOrder = $refundData->data->order[0];

    $details = '';
    foreach($w_order->details_list as $key=>$item){

        $price = $item->refund_order_detail_list[0]->price;
        // echo($price);
        // echo $w_order->trade_no_list;
        // echo $w_order->refund_no;
        
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
            Code: "'.$w_order->salesman_no.'"
        },';
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
            Memo: "备注：'.$w_order->remark.'；退还备注：'.$refundOrder->remark.'",
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
        echo('res='.$res.'end');
    }

    return $res;
}

// 其他入库单
function dealStockInOther($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.' '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 其他出库单
function dealStockOutOther($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockOutOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockOutOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点入库单
function dealStockInPd($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdInDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.' '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点出库单
function dealStockOutPd($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdOutDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                // echo $page;
                $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨入库单
function dealStockInTransfer($st, $et){
    $pageSize = 50;
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

    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else if(count($infoArr2)>0){
        $res = otherReceiveCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨出库单
function dealStockOutTransfer($st, $et, $warehouse){
    $pageSize = 50;
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
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockoutTransfer($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
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
    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else if(count($infoArr2)>0){
        $res = otherDispatchCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    }
    else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}
