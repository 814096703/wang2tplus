<?php
namespace app\controller;

use app\BaseController;
use Data;
use think\facade\Db;
use think\helper\Arr;

include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/WangApi.php");
include_once(__DIR__."/../api/MyTplusSdk.php");
include_once(__DIR__."/TplusApi.php");
include_once(__DIR__."/TplusApi2.php");
include_once(__DIR__."/TplusApi3.php");
include_once(__DIR__."/../api/util.php");

class GetOrder extends BaseController
{
    function test(){
        $orderType = $_GET['orderType'];
        $st = date("Y-m-d H:i:s", $_GET['startTime']);
        $et = date("Y-m-d H:i:s", $_GET['endTime']);
        // trace('日志信息', 'info');
        trace($orderType.':'.$st.'--'.$et, 'info');
        $total = 15;
        trace("查询到".$total."条数据", 'info');
    }

    // 共同方法
    function dealCommon(){
        try {
            $orderType = $_GET['orderType'];
            $st = date("Y-m-d H:i:s", $_GET['startTime']);
            $et = date("Y-m-d H:i:s", $_GET['endTime']);
            // trace('日志信息', 'info');
            trace($orderType.':'.$st.'--'.$et, 'info');
            $pageSize = 50;
            $msg = '';
            $status = 'success';
            // 查询旺店通单据
            if($orderType=='销售出库单' || $orderType=='销售出库单(退)'){
                $wangData = getData($st, $et, $pageSize, 1, $orderType);
            }else{
                $wangData = getData($st, $et, $pageSize, 0, $orderType);
            }
            
            if(property_exists($wangData, 'status') && $wangData->status==0){
                $total = $wangData->data->total_count;
               
                $insertNum = 0;
                $updateNum = 0;
                trace("查询到".$total."条数据", 'info');
                if($total>0){
                    $warehouseArr = getWarehouseArr($orderType);
                    
                    $pages = intval($total / $pageSize);
                    if($total % $pageSize != 0){
                        $pages += 1;
                    }
                    $page=0;
                    if($orderType=='销售出库单' || $orderType=='销售出库单(退)'){
                        $page=1;
                        $pages++;
                    }
                    for($page; $page<$pages; $page++){
                        $pageData = getData($st, $et, $pageSize, $page, $orderType);;
                        
                        sleep(1);
                        $orders = $pageData->data->order;
                        foreach($orders as $order){
                            if(in_array($order->warehouse_no, $warehouseArr)){
                                // 查询单据是否已转到t+
                                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                                $ordertime = getOrdertime($order, $orderType);
                                if(!$row){
                                    // 单据录入到t+
                                    $newRow = [
                                        'warehouse'=>$order->warehouse_no,
                                        'order_num'=>$order->order_no, 
                                        'order_detail'=>json_encode($order), 
                                        'order_time'=>$ordertime,
                                        'order_type'=>$orderType,
                                        'status'=>'未同步',
                                        'result'=>'未同步',
                                    ];
                                    
                                    Db::table('fa_order')->insert($newRow);
                                    $insertNum++;
                                    
                                }else if($row['status']=='未同步'){
                                    $row['order_detail'] = json_encode($order);
                                    $row['order_time'] = $ordertime;
                                    Db::table('fa_order')->update($row);
                                    $updateNum++;
                                }
                            }
                        }
                    }
                }
                $msg="查询到".$total.'条数据，新增'.$insertNum.'条数据，更新'.$updateNum.'条数据';
            }else{
                $status = 'error';
                $msg .= '旺店通接口错误';
            }
            
        } catch (\Throwable $th) {
            // dump($th);
            // trace($th->message, 'info');
            trace('程序报错', 'info');
            $msg = '程序报错';
            $status = 'error';
        } finally {
            trace('同步结果:'.$msg, 'info');
            $result = [
                'status'=>$status,
                'msg'=>$msg,
                'code'=>200,
            ];
            return json($result);
            // return json_encode($result);
        }
       
    }

    // 其他入库单
    function dealStockInOther(){
        trace('采购入库单:'.$_GET['startTime'].'--'.$_GET['endTime'], 'info');
       
        try {
            $st = date("Y-m-d H:i:s", $_GET['startTime']);
            $et = date("Y-m-d H:i:s", $_GET['endTime']);
            $pageSize = 50;
            $msg = 'success';
            // 查询旺店通单据
            $wangData = wangStockinOther($st, $et, $pageSize, 0);
            
            if(property_exists($wangData, 'status') && $wangData->status==0){
                $total = $wangData->data->total_count;
                trace(' 查询到'.$total."条数据", 'info');
                if($total>0){
                    $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
                    $pages = intval($total / $pageSize);
                    if($total % $pageSize != 0){
                        $pages += 1;
                    }
                    for($page=0; $page<$pages; $page++){
                        $pageData = wangStockinOther($st, $et, $pageSize, $page);
                        sleep(1);
                        $orders = $pageData->data->order;
                        foreach($orders as $order){
                            if(in_array($order->warehouse_no, $warehouseArr)){
                                // 查询单据是否已转到t+
                                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                                
                                if(!$row){
                                    // 单据录入到t+
                                    $newRow = [
                                        'warehouse'=>$order->warehouse_no,
                                        'order_num'=>$order->order_no, 
                                        'order_detail'=>json_encode($order), 
                                        'order_time'=>$order->stockin_time/1000,
                                        'order_type'=>'其他入库单',
                                        'status'=>'未同步',
                                        'result'=>'未同步',
                                    ];
                                    
                                    Db::table('fa_order')->insert($newRow);
                                    
                                }else if($row['status']=='未同步'){
                                    $row['order_detail'] = json_encode($order);
                                    $row['order_time'] = $order->stockin_time/1000;
                                    Db::table('fa_order')->update($row);
                                }
                            }
                        }
                    }
                }
            }else{
                $msg .= '旺店通接口错误';
            }
            
            return $msg;
        } catch (\Throwable $th) {
            trace($th, 'error');
            $msg = '程序报错';
        } finally {
            trace('同步结果：'.$msg, 'info');
            $result = [
                'msg'=>$msg,
                'code'=>200,
            ];
            return json_encode($result);
        }
       
    }
}

// 根据订单类型获取对应数据
function getData($st, $et, $pageSize, $page, $orderType){
    $pageData = [];
    switch ($orderType) {
        case '采购入库单':
            $pageData = stockinPurchase($st, $et, $pageSize, $page);
            break;
        
        case '其他入库单':
            $pageData = wangStockinOther($st, $et, $pageSize, $page);
            break;

        case '盘点入库单':
            $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page);
            break;

        case '调拨入库单':
            $pageData = wangStockinTransfer($st, $et, $pageSize, $page);
            break;
        
        case '其他出库单':
            $pageData = wangStockOutOther($st, $et, $pageSize, $page);
            break;

        case '盘点出库单':
            $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page);
            break;

        case '调拨出库单':
            $pageData = wangStockoutTransfer($st, $et, $pageSize, $page);
            break;

        case '销售出库单(退)':
            $pageData = stockinRefund($st, $et, $pageSize, $page);
            break;
        
        case '采购入库单(退)':
            $pageData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, $page);
            break;

        case '销售出库单':
            $pageData = qmStockoutForCommon($st, $et, $pageSize, $page);
            break;

            
    }

    return $pageData;
}

// 根据订单类型获取对应仓库信息
function getWarehouseArr($orderType){
    $warehouseArr = [];
    switch ($orderType) {
        case '采购入库单':
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            break;
        
        case '其他入库单':
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            break;

        case '盘点入库单':
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            break;

        case '调拨入库单':
            $warehouseArr = Db::table('fa_warehouse')->select();
            break;
        
        case '其他出库单':
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            break;

        case '盘点出库单':
            $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
            break;

        case '调拨出库单':
            $warehouseArr = Db::table('fa_warehouse')->select();
            break;

        case '销售出库单(退)':
            $warehouseArr = Db::table('fa_warehouse')->select();
            break;

        case '采购入库单(退)':
            $warehouseArr = Db::table('fa_warehouse')->select();
            break;

        case '销售出库单':
            $warehouseArr = Db::table('fa_warehouse')->select();
            break;
        
    }
    if($warehouseArr) {
        $warehouseArr = $warehouseArr->toArray();
    }
    // return newData();
    return $warehouseArr;
}

// 根据订单类型获取对应订单时间
function getOrdertime($order, $orderType){
    $ordertime = '';
    switch ($orderType) {
        case '采购入库单':
            $ordertime = $order->modified/1000;
            break;
        
        case '其他入库单':
            $ordertime = $order->stockin_time/1000;
            break;
        
        case '盘点入库单':
            $ordertime = $order->stockin_time/1000;
            break;

        case '调拨入库单':
            $ordertime = $order->modified/1000;
            break;
        
        case '其他出库单':
            $ordertime = $order->modified/1000;
            break;

        case '盘点出库单':
            $ordertime = $order->modified/1000;
            break;

        case '调拨出库单':
            $ordertime = $order->consign_time/1000;
            break;

        case '销售出库单(退)':
            $ordertime = strtotime($order->modified);
            break;

        case '采购入库单(退)':
            $ordertime = $order->consign_time/1000;
            break;

        case '销售出库单':
            $ordertime = strtotime($order->consign_time);
            break;
    }

    return $ordertime;
}