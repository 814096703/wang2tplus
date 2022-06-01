<?php
/**
 * TOP API: 3ldsmu02o9.wdt.wms.stockpd.stocksyncbypd request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class WdtWmsStockpdStocksyncbypdRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 盘点单信息
	 **/
	private $pdOrder;
	
	/** 
	 * 盘点单明细，可以为空
	 **/
	private $specList;
	
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

	public function setPdOrder($pdOrder)
	{
		$this->pdOrder = $pdOrder;
		$this->apiParas["pdOrder"] = $pdOrder;
	}

	public function getPdOrder()
	{
		return $this->pdOrder;
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
		return "3ldsmu02o9.wdt.wms.stockpd.stocksyncbypd";
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
