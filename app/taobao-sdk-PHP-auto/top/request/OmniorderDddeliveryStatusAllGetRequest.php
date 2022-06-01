<?php
/**
 * TOP API: taobao.omniorder.dddelivery.status.all.get request
 * 
 * @author auto create
 * @since 1.0, 2019.03.25
 */
class OmniorderDddeliveryStatusAllGetRequest
{
	/** 
	 * 点点送运单id
	 **/
	private $deliveryOrderNo;
	
	/** 
	 * 交易id（交易id与点点送运单id两个二选一，如果都写，需要运单同时满足两者）
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setDeliveryOrderNo($deliveryOrderNo)
	{
		$this->deliveryOrderNo = $deliveryOrderNo;
		$this->apiParas["delivery_order_no"] = $deliveryOrderNo;
	}

	public function getDeliveryOrderNo()
	{
		return $this->deliveryOrderNo;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.dddelivery.status.all.get";
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
