<?php
/**
 * TOP API: tmall.hk.order.clearance.query request
 * 
 * @author auto create
 * @since 1.0, 2020.04.30
 */
class TmallHkOrderClearanceQueryRequest
{
	/** 
	 * 交易主订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 调用方业务身份(由国际侧配置提供给调用方)
	 **/
	private $businessSymbol;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBusinessSymbol($businessSymbol)
	{
		$this->businessSymbol = $businessSymbol;
		$this->apiParas["business_symbol"] = $businessSymbol;
	}

	public function getBusinessSymbol()
	{
		return $this->businessSymbol;
	}

	public function getApiMethodName()
	{
		return "tmall.hk.order.clearance.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->businessSymbol,"businessSymbol");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
