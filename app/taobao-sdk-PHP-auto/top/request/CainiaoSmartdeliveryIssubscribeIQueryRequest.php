<?php
/**
 * TOP API: cainiao.smartdelivery.issubscribe.i.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryIssubscribeIQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.issubscribe.i.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
