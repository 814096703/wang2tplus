<?php
/**
 * TOP API: cainiao.smartdelivery.strategy.i.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryStrategyIUpdateRequest
{
	/** 
	 * 发货策略信息
	 **/
	private $deliveryStrategyInfo;
	
	private $apiParas = array();
	
	public function setDeliveryStrategyInfo($deliveryStrategyInfo)
	{
		$this->deliveryStrategyInfo = $deliveryStrategyInfo;
		$this->apiParas["delivery_strategy_info"] = $deliveryStrategyInfo;
	}

	public function getDeliveryStrategyInfo()
	{
		return $this->deliveryStrategyInfo;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.strategy.i.update";
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
