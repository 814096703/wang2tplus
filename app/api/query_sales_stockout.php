<?php

include 'wdtsdk.php';

$sid = 'wdterp30';
$appkey = 'lichAPI';//����鿴�ӿ��ĵ�
$appsecret = '9d083f54d85d35379a342b154059c182:865d2f6bc467a6c7da0e0db8f7029538';//����鿴�ӿ��ĵ�
$service_url = 'http://192.168.2.174:30000/openapi';//��������ip


$client = new WdtErpClient($service_url, $sid, $appkey, $appsecret);//ֱ������ip����
//$client = new WdtErpClient($sid, $appkey, $appsecret);//���贫��ip����

$pager = new Pager(50, 0);
//�ļ����������ӿ�demo�����������

$pars = array
(
	'stockout_no' => 'CK2020071015'
);
$pager = new Pager(50, 0, true);


$data = $client->pageCall("wms.stockout.Sales.queryWithDetail", $pager,  $pars);//��ҳ����
//echo "<pre>";print_r($data);echo "<pre>";
echo json_encode($data)
?>