<?php
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");
require_once('./WDTInvoiceUtils.php');
require_once('./top/TopClient.php');
require_once('./QimenCloud/QimenCloudClient.php');
require_once('./QimenCloud/top/request/TaobaoErpOrderSyncRequest.php');

$serverUrl = "http://api.taobao.com/top/router/qmtest";

$appKey = "";// 自己的appkey
$appSecret = "";// 自己的appsecret
$targetAppKey = "21363512";// WDT的appkey
$customerId = "wdterp30";
$wdtAppKey = ""; //旺店通开放平台提供的appkey
$wdtAppSecret = ""; //旺店通开放平台提供的secret
$wdtAppSalt = ""; //旺店通开放平台提供的salt

$c = new QimenCloudClient;
$c->appkey = $appKey;
$c->secretKey = $appSecret;
$c->targetAppkey = $targetAppKey;
$c->gatewayUrl = $serverUrl;

$req = new TaobaoErpOrderSyncRequest;

// 有实际作用的参数
$req->setPageNo("1");
$req->setPageSize("20");
$req->setCustomerid("wdterp30");
$req->setExtendProps(json_encode(array(
	"start_time" => "2020-07-27 00:00:00",
	"end_time" => "2020-08-25 00:00:00",
	"datetime" => date("Y-m-d H:i:s"),
	"wdt_sign" => "0a5777c8ba8189396a9793c40d2a74f3",
	"wdt_salt" => $wdtAppSalt,
	"wdt_appkey" => $wdtAppKey
)));

$apiParams = array();
		//获取业务参数
$apiParams = $req->getApiParas();

$apiParams['extendProps'] = json_decode($req->getApiParas()['extendProps'], true);
$utils = new QimenLocalUtils();
$utils->getWdtSign($apiParams, $wdtAppSecret);
$req->setExtendProps(json_encode($apiParams['extendProps']));
/*
echo "<pre>";print_r($opts);echo "<pre>";
$context = stream_context_create($opts);
$response = file_get_contents($service_url, false, $context);
echo $response;*/

$resp = $c->execute($req);