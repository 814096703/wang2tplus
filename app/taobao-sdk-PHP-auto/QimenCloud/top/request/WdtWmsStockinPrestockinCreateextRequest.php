<?php
/**
 * TOP API: 3ldsmu02o9.wdt.wms.stockin.prestockin.createext request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class WdtWmsStockinPrestockinCreateextRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 入库单明细
	 **/
	private $specList;
	
	/** 
	 * 入库单信息
	 **/
	private $stockinOrder;
	
	/** 
	 * wdt_appkey
	 **/
	private $wdtAppkey;
	
	/** 
	 * wdt_salt
	 **/
	private $wdtSalt;
	
	/** 
	 * 签名旺店通签名
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

	public function setSpecList($specList)
	{
		$this->specList = $specList;
		$this->apiParas["specList"] = $specList;
	}

	public function getSpecList()
	{
		return $this->specList;
	}

	public function setStockinOrder($stockinOrder)
	{
		$this->stockinOrder = $stockinOrder;
		$this->apiParas["stockinOrder"] = $stockinOrder;
	}

	public function getStockinOrder()
	{
		return $this->stockinOrder;
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
		return "3ldsmu02o9.wdt.wms.stockin.prestockin.createext";
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
