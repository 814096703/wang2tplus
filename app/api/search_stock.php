<?php
include 'wdtsdk.php';

$sid = 'wdtapi3';
$appkey = 'wdt_test';//申请查看接口文档
$appsecret = '99473a99453915ef0f7f3b8f8194b521:e4f9c187f333e3e640a6c613dc1fc4bc';//申请查看接口文档
$service_url = 'http://47.92.239.46/openapi';//测试环境ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数
//$client = new WdtErpClient($sid, $appkey, $appsecret);//无需传入ip参数

$pager = new Pager(50, 0);


$parMap = new stdClass();
// $parMap->start_time = '2019-06-29 09:09:09';
// $parMap->end_time = '2019-07-29 09:09:09';
$parMap->spec_nos = ["daba4"];
$parMap->warehouse_no = 'pos';
$parMap->mask = 1|2;

// $pager = new Pager(50, 0, false);
$pager = new Pager(50, 0, true);

$data = $client->pageCall("wms.StockSpec.search", $pager,  $parMap);
//var_dump($data);
echo "\n\n";
$php_json = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $php_json;
?>