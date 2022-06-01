<?php
/**
 * TOP API: 3ldsmu02o9.wdt.wms.stockin.transfer.createorder request
 * 
 * @author auto create
 * @since 1.0, 2020.08.31
 */
class WdtWmsStockinTransferCreateorderRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 调拨入库单明细信息
	 **/
	private $detailList;
	
	/** 
	 * 是否审核
	 **/
	private $isCheck;
	
	/** 
	 * 调拨入库单单据信息
	 **/
	private $orderInfo;
	
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

	public function setDetailList($detailList)
	{
		$this->detailList = $detailList;
		$this->apiParas["detailList"] = $detailList;
	}

	public function getDetailList()
	{
		return $this->detailList;
	}

	public function setIsCheck($isCheck)
	{
		$this->isCheck = $isCheck;
		$this->apiParas["isCheck"] = $isCheck;
	}

	public function getIsCheck()
	{
		return $this->isCheck;
	}

	public function setOrderInfo($orderInfo)
	{
		$this->orderInfo = $orderInfo;
		$this->apiParas["orderInfo"] = $orderInfo;
	}

	public function getOrderInfo()
	{
		return $this->orderInfo;
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
		return "3ldsmu02o9.wdt.wms.stockin.transfer.createorder";
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
