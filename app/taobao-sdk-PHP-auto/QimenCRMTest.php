<?php
header('Content-type:text/html;charset=utf8');
date_default_timezone_set('PRC');
require_once('./TopSdk.php');
require_once ('./QimenCloud/top/request/TaobaoCrmOrderDetailGetRequest.php');
require_once('./WdtUtils.php');

$serverUrl = "http://api.taobao.com/top/router/qmtest";

$appKey = "appkey";// 自己的appkey
$appSecret = "secret";// 自己的appsecret
$session = "session"; // 自己的session
$targetAppKey = "21363512";// WDT的appkey
$customerId = "customer_id";

$wdtAppKey = 'wdt_appkey';
$wdtAppSecret = 'wdt_secret:wdt_salt';
$wdtSecretArr = explode(':', $wdtAppSecret);
//echo "wdtArray: " . json_encode($wdtSecretArr);
$wdtSalt = $wdtSecretArr[1];
$wdtSecret = $wdtSecretArr[0];

$client = new QimenCloudClient($appKey, $appSecret);;
$client->gatewayUrl = 'http://qimen.api.taobao.com/router/qmtest';
$client->targetAppkey = '21363512';
$client->format = 'json';

$req = new TaobaoCrmOrderDetailGetRequest;
$req->setStartModified("2011-11-11 08:00:00");
$req->setEndModified("2011-12-11 08:00:00");
$req->setSdCode("ABCXXX");
$req->setOrderSn("1422XXX");
$req->setFields("order_id");

$timestamp = date("Y-m-d H:i:s");

// 有实际作用的参数
$req->setPageNo("1");
$req->setPageSize("20");
$req->setCustomerid("1234");

$extendProps = array(
    "start_time" => "2020-01-01 00:00:00",
    "end_time" => "2020-01-04 00:00:00",
    'wdt_appkey' => $wdtAppKey,
    'wdt_salt' => $wdtSalt,
    'datetime' => $timestamp
);
$req->setExtendProps(json_encode($extendProps));

$wdtUtils = new WdtUtils();
$wdtSign = $wdtUtils->getQimenOfficialWdtSign($req, $wdtSecret);
$extendProps['wdt_sign'] = $wdtSign;
$req->setExtendProps(json_encode($extendProps));

$resp = $client->execute($req, $session);
echo "\r\n" . json_encode($resp);