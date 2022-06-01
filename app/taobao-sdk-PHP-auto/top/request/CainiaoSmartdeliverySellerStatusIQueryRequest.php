<?php
/**
 * TOP API: cainiao.smartdelivery.seller.status.i.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliverySellerStatusIQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.seller.status.i.query";
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
