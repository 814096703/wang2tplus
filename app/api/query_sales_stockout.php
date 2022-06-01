<?php

include 'wdtsdk.php';

$sid = 'wdterp30';
$appkey = 'lichAPI';//申请查看接口文档
$appsecret = '9d083f54d85d35379a342b154059c182:865d2f6bc467a6c7da0e0db8f7029538';//申请查看接口文档
$service_url = 'http://192.168.2.174:30000/openapi';//开发环境ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数
//$client = new WdtErpClient($sid, $appkey, $appsecret);//无需传入ip参数

$pager = new Pager(50, 0);
//文件夹里其他接口demo按照上面更改

$pars = array
(
	'stockout_no' => 'CK2020071015'
);
$pager = new Pager(50, 0, true);


$data = $client->pageCall("wms.stockout.Sales.queryWithDetail", $pager,  $pars);//分页方法
//echo "<pre>";print_r($data);echo "<pre>";
echo json_encode($data)
?>