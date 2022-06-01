<?php
include 'wdtsdk.php';

$sid = 'wdterp30';
$appkey = 'lichAPI';//申请查看接口文档
$appsecret = '9d083f54d85d35379a342b154059c182:865d2f6bc467a6c7da0e0db8f7029538';//申请查看接口文档
$service_url = 'http://192.168.2.174:30000/openapi';//开发环境ip

$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数

$pars = array
(
    //'stockin_no' => '',
    //'warehouse_no' => 'lich0313',
    'process_no' => 'PS2020062202',
    //'time_type' => '2',
    //'start_time' => '2020-06-15 10:05:36',
    //'end_time' => '2020-06-17 11:05:36'
);
$pager = new Pager(50, 0, true);
$data = $client->pageCall("wms.stockin.Process.queryWithDetail", $pager,  $pars);//分页方法
$php_json = json_encode($data);
echo $php_json;

?>