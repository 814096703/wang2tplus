<?php
include 'wdtsdk.php';

$sid = 'wdtapi3';
$appkey = 'wdt_test';//申请查看接口文档
$appsecret = '99473a99453915ef0f7f3b8f8194b521:e4f9c187f333e3e640a6c613dc1fc4bc';//申请查看接口文档
$service_url = 'http://47.92.239.46/openapi';//测试环境ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数
//$client = new WdtErpClient($sid, $appkey, $appsecret);//无需传入ip参数



$parMap = new stdClass();
$parMap->shop_no = 'fx_test';
$parMap->is_own_platform = true;
//$parMap->tid = 'GO201812210003';
//$parMap->logistics_no = '234252441232';
//$parMap->is_part_sync = 1;

$syncList = array();
array_push($syncList, $parMap);

// $pager = new Pager(50, 0, false);
$pager = new Pager(50, 0, true);

$data = $client->pageCall("sales.LogisticsSync.getSyncListExt", $pager, $parMap);
//var_dump($data);
$php_json = json_encode($data);
echo $php_json;
?>

