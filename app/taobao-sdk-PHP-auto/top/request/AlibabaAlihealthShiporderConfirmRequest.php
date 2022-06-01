<?php
/**
 * TOP API: alibaba.alihealth.shiporder.confirm request
 * 
 * @author auto create
 * @since 1.0, 2020.09.04
 */
class AlibabaAlihealthShiporderConfirmRequest
{
	/** 
	 * 物流号
	 **/
	private $logisticProviderCode;
	
	/** 
	 * 物流单号
	 **/
	private $lpOrderCode;
	
	/** 
	 * 发货单号
	 **/
	private $mainShipOrderId;
	
	private $apiParas = array();
	
	public function setLogisticProviderCode($logisticProviderCode)
	{
		$this->logisticProviderCode = $logisticProviderCode;
		$this->apiParas["logistic_provider_code"] = $logisticProviderCode;
	}

	public function getLogisticProviderCode()
	{
		return $this->logisticProviderCode;
	}

	public function setLpOrderCode($lpOrderCode)
	{
		$this->lpOrderCode = $lpOrderCode;
		$this->apiParas["lp_order_code"] = $lpOrderCode;
	}

	public function getLpOrderCode()
	{
		return $this->lpOrderCode;
	}

	public function setMainShipOrderId($mainShipOrderId)
	{
		$this->mainShipOrderId = $mainShipOrderId;
		$this->apiParas["main_ship_order_id"] = $mainShipOrderId;
	}

	public function getMainShipOrderId()
	{
		return $this->mainShipOrderId;
	}

	public function getApiMethodName()
	{
		return "alibaba.alihealth.shiporder.confirm";
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
