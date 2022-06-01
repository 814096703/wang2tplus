<?php
/**
 * TOP API: tmall.nr.fulfill.cancel.reason.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallNrFulfillCancelReasonQueryRequest
{
	/** 
	 * 淘宝交易的主订单号
	 **/
	private $mainOrderId;
	
	/** 
	 * 商家的sellerID
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
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

	public function getApiMethodName()
	{
		return "tmall.nr.fulfill.cancel.reason.query";
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
