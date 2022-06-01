<?php
/**
 * TOP API: cainiao.smartdelivery.strategy.i.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryStrategyIQueryRequest
{
	/** 
	 * 发货地址
	 **/
	private $sendAddress;
	
	private $apiParas = array();
	
	public function setSendAddress($sendAddress)
	{
		$this->sendAddress = $sendAddress;
		$this->apiParas["send_address"] = $sendAddress;
	}

	public function getSendAddress()
	{
		return $this->sendAddress;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.strategy.i.query";
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
