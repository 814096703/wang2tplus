<?php

include 'wdtsdk.php';

$sid = 'wdtapi3';
$appkey = 'wdt_test';//����鿴�ӿ��ĵ�
$appsecret = '99473a99453915ef0f7f3b8f8194b521:e4f9c187f333e3e640a6c613dc1fc4bc';//����鿴�ӿ��ĵ�
$service_url = 'http://47.92.239.46/openapi';//���Ի���ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//ֱ������ip����
//$client = new WdtErpClient($sid, $appkey, $appsecret);//���贫��ip����

$pager = new Pager(50, 0);
//�ļ����������ӿ�demo�����������

$pars = array
(
	'start_time' => '2019-09-13 11:05:36',
	'end_time' => '2019-10-12 11:05:36'
);
$pager = new Pager(50, 0, true);

//$data = $client->call("wms.StockSpec.search",  $pars); //�����ҳ����
$data = $client->pageCall("sales.TradeQuery.queryWithDetail", $pager,  $pars);//��ҳ����
echo "<pre>";print_r($data);echo "<pre>";

?>