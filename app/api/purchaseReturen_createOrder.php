<?php
include 'wdtsdk.php';

$sid = 'wdterp30';
$appkey = 'lichAPI';//申请查看接口文档
$appsecret = '9d083f54d85d35379a342b154059c182:865d2f6bc467a6c7da0e0db8f7029538';//申请查看接口文档
$service_url = 'http://192.168.2.174:30000/openapi';//开发环境ip

$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//直接输入ip参数

$orderInfo = array
(
    'outer_no' => 'CR201701010002',
    'warehouse_no' => 'lich0313',
    'provider_no' => 'lich0313',
    'post_fee' => 15.0000,
    'other_fee' => 10.0000,
    'remark' => '测试使用'
);

$detailList = array
(
    array(
        'spec_no' => 'lich0313q',
        'num' => 10.0000,
        'discount' => 0.4,
        'price' => 10.0000,
        'remark' => '11111'
    ),
    array(
        'spec_no' => 'lich0313',
        'num' => 10.0000,
        'discount' => 0.4,
        'price' => 10.0000,
        'remark' => '22222'
    )
);
$is_submit = true;

$data = $client->call("purchase.PurchaseReturn.createOrder", $orderInfo, $detailList, $is_submit);//分页方法
$php_json = json_encode($data);
echo $php_json;

?>