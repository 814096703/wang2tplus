<?php

include 'wdtsdk.php';

$sid = 'wdtapi3';
$appkey = 'wdt_test';//申请查看接口文档
$appsecret = '99473a99453915ef0f7f3b8f8194b521:e4f9c187f333e3e640a6c613dc1fc4bc';//申请查看接口文档
$service_url = 'http://47.92.239.46/openapi';//测试环境ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数
//$client = new WdtErpClient($sid, $appkey, $appsecret);//无需传入ip参数

$pager = new Pager(50, 0);
//文件夹里其他接口demo按照上面更改

$pars = array
(
	'start_time' => '2019-09-13 11:05:36',
	'end_time' => '2019-10-12 11:05:36'
);
$pager = new Pager(50, 0, true);

//$data = $client->call("wms.StockSpec.search",  $pars); //无需分页方法
$data = $client->pageCall("sales.TradeQuery.queryWithDetail", $pager,  $pars);//分页方法
echo "<pre>";print_r($data);echo "<pre>";

?>