<?php
include 'wdtsdk.php';

$sid = 'wdtapi3';
$appkey = 'wdt_test';//申请查看接口文档
$appsecret = '99473a99453915ef0f7f3b8f8194b521:e4f9c187f333e3e640a6c613dc1fc4bc';//申请查看接口文档
$service_url = 'http://47.92.239.46/openapi';//测试环境ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数
//$client = new WdtErpClient($sid, $appkey, $appsecret);//无需传入ip参数

$pager = new Pager(50, 0);

$paraMap = new stdClass();
//$paraMap->warehouse_id="18";
//$paraMap->is_query_for_main_provider = false;
$paraMap->start_time = "2019-09-01";
$paraMap->end_time = "2019-10-01";

$pager = new Pager(2, 0, true);

$data = $client->pageCall("wms.stockin.Refund.queryWithDetail", $pager, $paraMap);
//var_dump($data);
$php_json = json_encode($data);
echo $php_json;
?>