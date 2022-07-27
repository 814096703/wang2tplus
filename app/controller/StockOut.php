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
        $st = '2022-07-11 08:00:00';
        $et = '2022-07-11 09:00:00';
        $warehouse = '01';
        $res = qmStockout(100, 1, ['start_time'=>$st, 'end_time'=>$et, 'status_type' => '3','status' => '110','warehouse_no'=>$warehouse]);
        dump($res);
    }

    public function testCommon(){
        $st = '2022-07-11 08:00:00';
        $et = '2022-07-11 09:00:00';
        $rangeTimeArrOut = getRangeTimeArr($st, $et);
        dump($rangeTimeArrOut);
        $whs =  Db::table('fa_warehouse')->select();
        dump($whs);
        $whsArr = [];
        foreach($whs as $wh){
            array_push($whsArr, $wh['wh_code']);
        }
        dump($whsArr);
    }

    public function getOrderFromWang(){
        $st = date("Y-m-d H:i:s", $_GET['startTime']);
        $et = date("Y-m-d H:i:s", $_GET['endTime']);

        $pagesize = 100;
        $rangeTimeArrOut = getRangeTimeArr($st, $et);
        $orders = [];
        foreach($rangeTimeArrOut as $rangeTimeOut){
            if(strtotime($rangeTimeOut['start'])!=strtotime(date("Y-m-d"))){
                // 获取一天24小时时间段
                $rangeTimeArr = getDayHours($rangeTimeOut['start']);
                // 获取一天24小时的全部订单
                foreach($rangeTimeArr as $rangeTime){
                    
                    $wangData = qmStockout($rangeTime['start'], $rangeTime['end'], $pagesize, 1, $warehouse['wh_code']);
                    sleep(1);
                    if($wangData->status==0){
                        
                        $total = $wangData->data->total_count;
                        
                        if($total>0){
                            
                            $pages = intval($total / $pagesize);
                            if($total % $pagesize != 0){
                                $pages += 1;
                            }
                            for($page=1; $page<=$pages; $page++){
                                $pageData = qmStockout($rangeTime['start'], $rangeTime['end'], $pagesize, $page, $warehouse['wh_code']);
                                $orders = array_merge($orders, $pageData->data->order);
                            }
                        }
                    }
                }
            }
        }
        $whs =  Db::table('fa_warehouse')->select();
        foreach($orders as $order){
            
        }

        $newRow = [
            'warehouse'=>$warehouse['wh_name'],
            'order_num'=>$order->order_no, 
            'order_detail'=>json_encode($order), 
            'order_time'=>strtotime($order->consign_time),
            'order_type'=>'销售出库单',
            'status'=>'未同步',
            'result'=>'未同步',
        ];
    }
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
                sleep(1);
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