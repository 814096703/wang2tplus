<?php
/**
 * TOP API: qimen.taobao.alphax.open.get.express request
 * 
 * @author auto create
 * @since 1.0, 2018.06.04
 */
class TaobaoAlphaxOpenGetExpressRequest
{
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 卖家名称
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
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
		return "qimen.taobao.alphax.open.get.express";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
