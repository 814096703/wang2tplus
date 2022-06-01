<?php
/**
 * TOP API: cvzlge28n0.sales.rawtrade.pushself request
 * 
 * @author auto create
 * @since 1.0, 2019.09.25
 */
class SalesRawtradePushselfRequest
{
	/** 
	 * 主单列表
	 **/
	private $rawTradeList;
	
	/** 
	 * 子单列表
	 **/
	private $rawTradeOrderList;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	private $apiParas = array();
	
	public function setRawTradeList($rawTradeList)
	{
		$this->rawTradeList = $rawTradeList;
		$this->apiParas["rawTradeList"] = $rawTradeList;
	}

	public function getRawTradeList()
	{
		return $this->rawTradeList;
	}

	public function setRawTradeOrderList($rawTradeOrderList)
	{
		$this->rawTradeOrderList = $rawTradeOrderList;
		$this->apiParas["rawTradeOrderList"] = $rawTradeOrderList;
	}

	public function getRawTradeOrderList()
	{
		return $this->rawTradeOrderList;
	}

	public function setShopNo($shopNo)
	{
		$this->shopNo = $shopNo;
		$this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo()
	{
		return $this->shopNo;
	}

	public function getApiMethodName()
	{
		return "cvzlge28n0.sales.rawtrade.pushself";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
