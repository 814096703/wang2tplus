<?php
/**
 * TOP API: qimen.taobao.alphax.open.jxt.express request
 * 
 * @author auto create
 * @since 1.0, 2018.08.08
 */
class TaobaoAlphaxOpenJxtExpressRequest
{
	/** 
	 * 快递公司名称
	 **/
	private $cap;
	
	/** 
	 * 主订单id
	 **/
	private $orderId;
	
	/** 
	 * 卖家主账号
	 **/
	private $sellerId;
	
	/** 
	 * 卖家名称
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setCap($cap)
	{
		$this->cap = $cap;
		$this->apiParas["cap"] = $cap;
	}

	public function getCap()
	{
		return $this->cap;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.alphax.open.jxt.express";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cap,"cap");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
