<?php
/**
 * TOP API: cainiao.smartdelivery.strategy.warehouse.i.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryStrategyWarehouseIUpdateRequest
{
	/** 
	 * 智能发货设置请求参数
	 **/
	private $deliveryStrategySetRequest;
	
	private $apiParas = array();
	
	public function setDeliveryStrategySetRequest($deliveryStrategySetRequest)
	{
		$this->deliveryStrategySetRequest = $deliveryStrategySetRequest;
		$this->apiParas["delivery_strategy_set_request"] = $deliveryStrategySetRequest;
	}

	public function getDeliveryStrategySetRequest()
	{
		return $this->deliveryStrategySetRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.strategy.warehouse.i.update";
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
