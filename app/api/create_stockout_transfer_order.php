<?php
header("Content-Type: text/html;   charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('wdtsdk.php');
  
$sid = 'wdterp30';
$appkey = 'zyOther';//申请查看接口文档
$appsecret = '423c25002f36c7445ccd7742ea5d1be4:8f034c5a36d5749a438951cde1963f2a';//申请查看接口文档
$service_url = 'http://192.168.1.135:30000/openapi';//测试环境ip

$client = new   WdtErpClient($service_url, $sid, $appkey, $appsecret);
$transferOutOrder = new stdClass();
$transferOutOrder->src_order_no='TF202003020004';
$transferOutOrder->warehouse_no='lz';
//$transferInOrder->logisctics_code='';
$transferOutOrder->remark='test';

$transferOutOrderList = array();
$transferOutOrderDetail1 = new stdClass();
$transferOutOrderDetail1->spec_no='lz41';
$transferOutOrderDetail1->num=10;
$transferOutOrderDetail1->unit_name='lz1';
$transferOutOrderDetail1->remark='test';

array_push($transferOutOrderList,$transferOutOrderDetail1);
$data = $client->call("wms.stockout.Transfer.createOrder", $transferOutOrder,$transferOutOrderList, false); 
$response = $client->call("wms.stockout.Other.createOther",   $order);

$php_json = json_encode($response);
echo $php_json;
  
  
?>