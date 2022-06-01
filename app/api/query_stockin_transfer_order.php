<?php
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('wdtsdk.php');
 
$sid = 'wdterp30';
$appkey = 'zyOther';//申请查看接口文档
$appsecret = '423c25002f36c7445ccd7742ea5d1be4:8f034c5a36d5749a438951cde1963f2a';//申请查看接口文档
$service_url = 'http://192.168.10.194:30000/openapi';//测试环境ip

$client = new   WdtErpClient($service_url, $sid, $appkey, $appsecret);

  
$params=new stdClass();
$params->start_time = '2020-06-2 00:00:00';
$params->end_time = '2020-06-14 00:00:00';
$params->src_order_type = '20';
$pager = new Pager(1, 0, true);
$data = $client->pageCall("wms.stockin.Other.queryWithDetail", $pager, $params);

$php_json = json_encode($data);
echo $php_json;
//echo "<pre>";print_r($data);echo "<pre>";
?>