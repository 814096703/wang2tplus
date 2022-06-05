<?php
namespace app\controller;

use app\BaseController;
include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/../taobao-sdk-PHP-auto/TopSdk.php");
include_once(__DIR__."/../taobao-sdk-PHP-auto/QimenCloud/Top/request/WdtWmsStockoutSalesQuerywithdetailRequest.php");
include_once(__DIR__."/../taobao-sdk-PHP-auto/WdtUtils.php");
header('Content-type:text/html;charset=utf8');
date_default_timezone_set('PRC');

class Wang extends BaseController
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function test(){
        // $res = qmTest('2022-02-11 13:00:58', '2022-02-11 13:31:58', 10, 1);
        // $res = stockinPurchase('2022-02-01', '2022-02-23');
        // dump($res);
    }
}

// 采购入库单
function stockinPurchase($start_time, $end_time, $pageSize, $pageNo, $warehouse){
    
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));
   
    $pars = array
    (
        'start_time' => $start_time,
        'end_time' => $end_time,
        'warehouse_no'=>$warehouse,
        'status'=>'80'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    return $response = $client->pageCall("wms.stockin.Purchase.queryWithDetail",$pager, $pars);
}

// 其他入库单（其他入库业务）
function wangStockinOther($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'80'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.stockin.Other.queryWithDetail",$pager, $pars);
    
    return $response;
}

// 调拨入库单
function wangStockinTransfer($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'80'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.stockin.Transfer.queryWithDetail",$pager, $pars);
    return $response;
    // echo "<pre>";print_r($response);echo "<pre>";
    // $php_json = json_encode($response);
    // echo $php_json;
}

// 其他出库单
function wangStockoutOther($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'70'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.stockout.OtherQuery.queryWithDetail",$pager, $pars);
    return $response;
}

// 调拨出库单
function wangStockoutTransfer($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'110'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.stockout.Transfer.queryWithDetail",$pager, $pars);
    return $response;
}

// 销售出库单（奇门）
function qmTest($st, $et, $pageSize, $pageNo, $warehouse){

    $wdtAppKey = env('WANG.appkey');
    $wdtAppSecret = env('WANG.appsecret');
    $wdtSecretArr = explode(':', $wdtAppSecret);
    $wdtSalt = $wdtSecretArr[1];
    $wdtSecret = $wdtSecretArr[0];
    $client = new \QimenCloudClient(env('WANG.qmAppkey'), '4bafe14675df13f72da15a96be473971');


    // $client->gatewayUrl = 'http://3ldsmu02o9.api.taobao.com/router/qmtest';//测试
    $client->gatewayUrl = 'http://3ldsmu02o9.api.taobao.com/router/qm';// 正式环境
    $client->targetAppkey = '21363512';
    $client->format = 'json';

    $request = new \WdtWmsStockoutSalesQuerywithdetailRequest();

    $timestamp = date("Y-m-d H:i:s");
    // 'stockout_no' => 'CKDH20220209105',
    $params = array(
        'start_time' => $st,
        'end_time' => $et,
        'status' => '110',
        'warehouse_no'=>$warehouse
    );
    
    $pager = array(
        'page_size' => $pageSize,
        'page_no' => $pageNo
    );
    $request->setParams(json_encode($params));
    $request->setPager(json_encode($pager));
    $request->setDatetime($timestamp);
    $request->setWdtAppkey($wdtAppKey);
    $request->setWdtSalt($wdtSalt);
    $request->putOtherTextParam("wdt3_customer_id", "xishuicun3");

    $wdtUtils = new \WdtUtils();
    $wdtSign = $wdtUtils->getQimenCustomWdtSign($request, $wdtSecret);
    $request->setWdtSign($wdtSign);

    try {
        $response = $client->execute($request);
        // echo "\r\nresponse: " . json_encode($response) . "\n";
        // dump($response);
        return $response;
    } catch (\Exception $e) {
        echo "\r\nexception:" . $e->getMessage();
        return (object)['status'=>1];
    }
}

// 盘点入库单
function wangQueryStockPdInDetail($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'80'
    );
    // 'warehouse_no' => 'xishuicun3-test'
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.StockPd.queryStockPdInDetail",$pager, $pars);
    return $response;
}

// 盘点出库单
function wangQueryStockPdOutDetail($st, $et, $pageSize, $pageNo, $warehouse){
    $client = new \WdtErpClient(env('WANG.service_url'), env('WANG.sid'), env('WANG.appkey'), env('WANG.appsecret'));//直接输入ip参数
    
    $pars = array
    (    
        'start_time' => $st,
        'end_time' => $et,
        'warehouse_no'=>$warehouse,
        'status'=>'110'
    );
    
    $pager = new \Pager($pageSize, $pageNo, true);
    $response = $client->pageCall("wms.StockPd.queryStockPdOutDetail",$pager, $pars);
    return $response;
}
