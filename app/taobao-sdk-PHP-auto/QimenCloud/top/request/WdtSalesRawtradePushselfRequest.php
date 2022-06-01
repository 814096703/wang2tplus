<?php
/**
 * TOP API: 3ldsmu02o9.wdt.sales.rawtrade.pushself request
 * 
 * @author auto create
 * @since 1.0, 2020.09.04
 */
class WdtSalesRawtradePushselfRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 优惠信息（不需要优惠明细可不传,优惠明细显示在订单管理界面的优惠明细Tab页）
	 **/
	private $discountList;
	
	/** 
	 * 原始单信息
	 **/
	private $rawTradeList;
	
	/** 
	 * 原始子单信息
	 **/
	private $rawTradeOrderList;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * wdt_appkey
	 **/
	private $wdtAppkey;
	
	/** 
	 * wdt_salt
	 **/
	private $wdtSalt;
	
	/** 
	 * sign
	 **/
	private $wdtSign;
	
	private $apiParas = array();
	
	public function setDatetime($datetime)
	{
		$this->datetime = $datetime;
		$this->apiParas["datetime"] = $datetime;
	}

	public function getDatetime()
	{
		return $this->datetime;
	}

	public function setDiscountList($discountList)
	{
		$this->discountList = $discountList;
		$this->apiParas["discountList"] = $discountList;
	}

	public function getDiscountList()
	{
		return $this->discountList;
	}

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

	public function setWdtAppkey($wdtAppkey)
	{
		$this->wdtAppkey = $wdtAppkey;
		$this->apiParas["wdt_appkey"] = $wdtAppkey;
	}

	public function getWdtAppkey()
	{
		return $this->wdtAppkey;
	}

	public function setWdtSalt($wdtSalt)
	{
		$this->wdtSalt = $wdtSalt;
		$this->apiParas["wdt_salt"] = $wdtSalt;
	}

	public function getWdtSalt()
	{
		return $this->wdtSalt;
	}

	public function setWdtSign($wdtSign)
	{
		$this->wdtSign = $wdtSign;
		$this->apiParas["wdt_sign"] = $wdtSign;
	}

	public function getWdtSign()
	{
		return $this->wdtSign;
	}

	public function getApiMethodName()
	{
		return "3ldsmu02o9.wdt.sales.rawtrade.pushself";
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
