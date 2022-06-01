<?php
/**
 * TOP API: cainiao.smartdelivery.strategy.warehouse.i.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryStrategyWarehouseIQueryRequest
{
	/** 
	 * 查询请求参数
	 **/
	private $paramQueryDeliveryStrategyRequest;
	
	private $apiParas = array();
	
	public function setParamQueryDeliveryStrategyRequest($paramQueryDeliveryStrategyRequest)
	{
		$this->paramQueryDeliveryStrategyRequest = $paramQueryDeliveryStrategyRequest;
		$this->apiParas["param_query_delivery_strategy_request"] = $paramQueryDeliveryStrategyRequest;
	}

	public function getParamQueryDeliveryStrategyRequest()
	{
		return $this->paramQueryDeliveryStrategyRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.strategy.warehouse.i.query";
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
