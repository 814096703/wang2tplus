<?php
header('Content-type:text/html;charset=utf8');
date_default_timezone_set('PRC');
require_once('./TopSdk.php');
require_once('./QimenCloud/Top/request/WdtWmsStockspecQuerychangehistoryRequest.php');
require_once('./WdtUtils.php');


$wdtAppKey = 'wdt_appkey';
$wdtAppSecret = 'wdt_secret:wdt_salt';
$wdtSecretArr = explode(':', $wdtAppSecret);
$wdtSalt = $wdtSecretArr[1];
$wdtSecret = $wdtSecretArr[0];
$client = new QimenCloudClient('appkey', 'appsecret');


$client->gatewayUrl = 'http://3ldsmu02o9.api.taobao.com/router/qmtest';//测试
//$client->gatewayUrl = 'http://api.taobao.com/router/qmtest';// 正式环境
$client->targetAppkey = '21363512';
$client->format = 'json';

$request = new WdtWmsStockspecQuerychangehistoryRequest();

$timestamp = date("Y-m-d H:i:s");
$params = array(
    "spec_no" => "testLJ01",
    'start_date' => '2020-08-23 00:00:00',
    'end_date' => '2020-09-20 00:00:00',
    'warehouse_no' => '1001'
);
$pager = array(
    'page_size' => 10,
    'page_no' => 1
);
$request->setParams(json_encode($params));
$request->setPager(json_encode($pager));
$request->setDatetime($timestamp);
$request->setWdtAppkey($wdtAppKey);
$request->setWdtSalt($wdtSalt);
$request->putOtherTextParam("wdt3_customer_id", "wdtapi3");

$wdtUtils = new WdtUtils();
$wdtSign = $wdtUtils->getQimenCustomWdtSign($request, $wdtSecret);
$request->setWdtSign($wdtSign);

try {
    $response = $client->execute($request);
    echo "\r\nresponse: " . json_encode($response) . "\n";
} catch (Exception $e) {
    echo "\r\nexception:" . $e->getMessage();
}