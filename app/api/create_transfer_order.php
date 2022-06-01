<?php
header("Content-Type: text/html;   charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('wdtsdk.php');
  
$sid = 'wdterp30';
$appkey = 'zyOther';//申请查看接口文档
$appsecret = '423c25002f36c7445ccd7742ea5d1be4:8f034c5a36d5749a438951cde1963f2a';//申请查看接口文档
$service_url = 'http://192.168.1.135:30000/openapi';//测试环境ip

$client = new   WdtErpClient($service_url, $sid, $appkey, $appsecret);

$stockTransfer = new stdClass();
$stockTransfer->from_warehouse_no='lz';
$stockTransfer->to_warehouse_no='jziyy';
$stockTransfer->mode=3;
$stockTransfer->outer_no='test1111';
  
$transferList = array();
$transferDetail1 = new stdClass();
$transferDetail1->num=1;
$transferDetail1->spec_no='lz11';
$transferDetail1->remark='test1';
  
$transferDetail2 = new stdClass();
$transferDetail2->num=1;
$transferDetail2->spec_no='lz12';
$transferDetail2->remark='test2';
array_push($transferList, $transferDetail1);
array_push($transferList, $transferDetail2);
  
$response = $client->call("wms.stocktransfer.Edit.createOrder",$stockTransfer,$transferList,true); 

$php_json = json_encode($response);
echo $php_json;
  
  
?>