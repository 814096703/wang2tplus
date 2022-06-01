<?php
/**
 * TOP API: qimen.taobao.qianniu.cloudkefu.order.self.intercept request
 * 
 * @author auto create
 * @since 1.0, 2020.05.05
 */
class TaobaoQianniuCloudkefuOrderSelfInterceptRequest
{
	/** 
	 * 订单信息
	 **/
	private $bizOrder;
	
	/** 
	 * 买家账号名
	 **/
	private $buyerNick;
	
	/** 
	 * 表示同步还是异步返回synchronous/asynchronous
	 **/
	private $callType;
	
	/** 
	 * 店铺主账号
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setBizOrder($bizOrder)
	{
		$this->bizOrder = $bizOrder;
		$this->apiParas["bizOrder"] = $bizOrder;
	}

	public function getBizOrder()
	{
		return $this->bizOrder;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyerNick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCallType($callType)
	{
		$this->callType = $callType;
		$this->apiParas["callType"] = $callType;
	}

	public function getCallType()
	{
		return $this->callType;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["sellerNick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.qianniu.cloudkefu.order.self.intercept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->callType,"callType");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
