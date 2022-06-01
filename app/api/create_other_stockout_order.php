<?php
header("Content-Type: text/html;   charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('wdtsdk.php');
  
$sid = 'wdterp30';
$appkey = 'zyOther';//申请查看接口文档
$appsecret = '423c25002f36c7445ccd7742ea5d1be4:8f034c5a36d5749a438951cde1963f2a';//申请查看接口文档
$service_url = 'http://192.168.1.135:30000/openapi';//测试环境ip

$client = new   WdtErpClient($service_url, $sid, $appkey, $appsecret);
$order = new stdClass();
$order->outer_no="CG20564564745";
$order->warehouse_no="1001";
$order->stockout_no="12551234";
$order->reason = '1';




$orderDetail = new stdClass();
$orderDetail->spec_no="PC_2016";
$orderDetail->num="15";
$orderDetail->position_no = 'B-B'; 
$order->goods_list = [$orderDetail];
  
$response = $client->call("wms.stockout.Other.createOther",   $order);

$php_json = json_encode($response);
echo $php_json;
  
  
?>