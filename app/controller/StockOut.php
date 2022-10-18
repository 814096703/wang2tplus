<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\helper\Arr;

include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/WangApi.php");
include_once(__DIR__."/../api/MyTplusSdk.php");
include_once(__DIR__."/TplusApi.php");
include_once(__DIR__."/TplusApi2.php");
include_once(__DIR__."/TplusApi3.php");
include_once(__DIR__."/../api/util.php");

class StockOut extends BaseController{
    public function test(){
        // $st = '2022-07-11 08:00:00';
        // $et = '2022-07-11 09:00:00';
        // $warehouse = '01';
        // $res = qmStockout(100, 1, ['start_time'=>$st, 'end_time'=>$et, 'status_type' => '3','status' => '110','warehouse_no'=>$warehouse]);
        // dump($res);
        return $_GET['day'];
    }

    public function testCommon(){
        $st = '2022-07-11 08:00:00';
        $et = '2022-07-12 09:00:00';
        $dayArr = getDayArr($st, $et);

        // dump($dayArr);
        foreach($dayArr as $day){
            $hours = getDayHours($day.' 00:00:00');
            // dump($hours);
        }
        

        $whs =  Db::table('fa_warehouse')->select();
        $whsArr = [];
        foreach($whs as $wh){
            array_push($whsArr, $wh['wh_code']);
        }
        // dump($whsArr);
    }

    public function getDayOrder(){
        try {
            //code...
            $day = date("Y-m-d H:i:s", $_GET['day']);
            // echo $day;
            trace('getDayOrder 同步时间：'.$day, 'info');
            $pagesize = 100;
            $orders = [];

            $whs =  Db::table('fa_warehouse')->select();
            $whsArr = [];
            foreach($whs as $wh){
                array_push($whsArr, $wh['wh_code']);
            }

            // 获取一天24小时时间段
            $rangeTimeArr = getDayHours($day);
            // 获取一天24小时的全部订单
            foreach($rangeTimeArr as $rangeTime){
                
                $wangData = qmStockout($pagesize, 1, ['start_time'=>$rangeTime['start'], 'end_time'=>$rangeTime['end'], 'status_type' => '3','status' => '110']);
                sleep(1);
                
                if($wangData->status==0){
                    $total = $wangData->data->total_count;
                    if($total>0){
                        
                        $pages = intval($total / $pagesize);
                        if($total % $pagesize != 0){
                            $pages += 1;
                        }
                        for($page=1; $page<=$pages; $page++){
                            echo 'page='.$page;
                            $pageData = qmStockout($pagesize, $page, ['start_time'=>$rangeTime['start'], 'end_time'=>$rangeTime['end'], 'status_type' => '3','status' => '110']);
                            $orders = $pageData->data->order;
                            foreach($orders as $order){
                                if(in_array($order->warehouse_no, $whsArr)){
                                    // dump($order);
                                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                                    if(!$row){
                                        $newRow = [
                                            'warehouse'=>$order->warehouse_no,
                                            'order_num'=>$order->order_no, 
                                            'order_detail'=>json_encode($order), 
                                            'order_time'=>strtotime($order->consign_time),
                                            'order_type'=>'销售出库单',
                                            'status'=>'未同步',
                                            'result'=>'未同步',
                                        ];
                                        Db::table('fa_order')->insert($newRow); 
                                        echo $order->order_no;
                                    }
                                    
                                }
                            }
                            sleep(1);
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
            // echo $th;
            trace('销售出库单 错误：'.$th, 'info');
        }
        
    }

    public function DealDayOrder(){
        $day = date("Y-m-d H:i:s", $_GET['day']);
        // echo $day;
        trace('销售出库单DealDayOrder 同步时间：'.$day, 'info');
        $rows= Db::table('fa_order')
        ->where('status', '未同步')
        ->where('order_type', '销售出库单')
        ->whereTime('order_time', 'between', [$day, date('Y-m-d H:i:s',strtotime("$day + 1 days"))])
        ->select();

        $apiOrder = [];
        $handmakeOrder = [];
        foreach($rows as $row){
            $order = json_decode($row['order_detail']);
            if($order->trade_from==1){ // trade_from=1 API抓单 
                array_push($apiOrder, $order);
            }else{
                array_push($handmakeOrder, $order);
            }
        }
        foreach($handmakeOrder as $order){
            // 单据录入到t+
            try {
                //code...
                sleep(1);
                $res = w2tStockOut($order);
                // dump($res);
            } catch (\Throwable $th) {
                //throw $th;
                // echo $order->order_no;
                trace('销售出库单 错误单号：'.$order->order_no, 'info');
                // echo $th;
                trace('销售出库单 错误：'.$th, 'info');
                $res = '{"message": "录入出错"}';
                // dump(json_decode($res));
            }
            $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
            if($res=='null'){
                // 单据信息录入到数据库
                $row['order_detail'] = json_encode($order);
                $row['status'] = '已同步';
                $row['result'] = '已同步';
            }else{
                $row['result'] = translateErrMsg(json_decode($res)->message);
            }
            Db::table('fa_order')->update($row);
        }
        
        // 对抓取的订单根据店铺进行细分
        $shopArr = [];
        foreach($apiOrder as $d){
            if(!array_key_exists($d->shop_no, $shopArr)) {
                $shopArr[$d->shop_no] = [];
            }
            if(!array_key_exists($d->warehouse_no, $shopArr[$d->shop_no])){
                $shopArr[$d->shop_no][$d->warehouse_no] = [];
            }
            array_push($shopArr[$d->shop_no][$d->warehouse_no], $d);
        }
        $mixOrderArrs = [];
        foreach($shopArr as $shop=>$whArr){
            foreach($whArr as $wh=>$arr){
                array_push($mixOrderArrs, $arr);
            }
        }
        
        
        // $shopUsed = [];
        // foreach($apiOrder as $order){
        //     if(!in_array($order->shop_no, $shopUsed)){
        //         array_push($shopUsed, $order->shop_no);
        //     }
        // }

        // $devideOrders = [];
        
        // foreach($shopUsed as $shop){
        //     $devideOrders[$shop] = [];
        //     foreach($apiOrder as $order){
        //         if($order->shop_no==$shop){
        //             array_push($devideOrders[$shop], $order);
        //         }
        //     }
        // }

        // $shop_wh_order_arr = [];
        // foreach($shopUsed as $shop){
        //     $shop_order_arr = $devideOrders[$shop];
        //     $wh_order_arr = [];
        //     foreach($shop_order_arr as $shop_order){
        //         if(!array_key_exists($shop_order->warehouse_no, $wh_order_arr)){
        //             $wh_order_arr[$shop_order->warehouse_no] = [];
        //         }
        //         array_push($wh_order_arr, $shop_order);
        //     }
        //     foreach($wh_order_arr as $shop_wh_order){
        //         array_push($shop_wh_order_arr, $shop_wh_order);
        //     }
            
        // }

        
        // 接口抓取 合并录入t+
        foreach($mixOrderArrs as $mixOrders){
            // $mixOrders = $devideOrders[$shop];
            sleep(1);
            // dump($mixOrders);
            if(count($mixOrders)>0){
                
                try {
                    $mixRes = w2tStockOutMany($mixOrders);
                } catch (\Throwable $th) {
                    //throw $th;
                    trace('合并录入 错误：'.$th, 'info');
                } 
                
                if($mixRes=='null'){
                    foreach($mixOrders as $order){
                        $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                        Db::table('fa_order')->update($row);
                    }
                }else{
                    foreach($mixOrders as $order){
                        $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                        $errMsg = translateErrMsg(json_decode($mixRes)->message);
                        $row['result'] = "合并录入失败,部分单据存在问题：".$errMsg;
                        Db::table('fa_order')->update($row);
                    }
                    
                }
            }
        }

        return 'success';
    }
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
    sleep(1);

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
    sleep(1);
    return $res;
}

function getDayArr($st, $et){
    $stInt = strtotime($st);
    $etInt = strtotime($et);
    $dayArr = [];
    if($stInt>$etInt){
        return $dayArr;
    }
    
    $start = date('Y-m-d', $stInt);
    $end = date('Y-m-d', $etInt);

    array_push($dayArr, $start);

    if($start==$end){
        return $dayArr;
    }
    $next = date('Y-m-d',strtotime("$start + 1 days"));
    while(strtotime($next) <= strtotime($end)){
        array_push($dayArr, $next);
        $next = date('Y-m-d',strtotime("$next + 1 days"));
    }

    return $dayArr;
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