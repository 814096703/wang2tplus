 <?php
header("Content-Type: text/html;   charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('wdtsdk.php');
  
$sid = 'wdterp30';
$appkey = 'zyOther';//申请查看接口文档
$appsecret = '423c25002f36c7445ccd7742ea5d1be4:8f034c5a36d5749a438951cde1963f2a';//申请查看接口文档
$service_url = 'http://192.168.1.135:30000/openapi';//测试环境ip

$client = new   WdtErpClient($service_url, $sid, $appkey, $appsecret);

$transferInOrder = new stdClass();
$transferInOrder->src_order_no='TF202003020004';
$transferInOrder->warehouse_no='jziyy';
//$transferInOrder->logisctics_code='';
$transferInOrder->remark='test';
  
$transferInOrderList = array();
$transferInOrderDetail1 = new stdClass();
$transferInOrderDetail1->spec_no='lz41';
$transferInOrderDetail1->num=1;
$transferInOrderDetail1->unit_name='lz1';
$transferInOrderDetail1->remark='test';
$transferInOrderDetail1->position_no='b01';
  
array_push($transferInOrderList,$transferInOrderDetail1);
  
$response = $client->call("wms.stockin.Transfer.createOrder", $transferInOrder,$transferInOrderList, true); 

$php_json = json_encode($response);
echo $php_json;
  
  
?>