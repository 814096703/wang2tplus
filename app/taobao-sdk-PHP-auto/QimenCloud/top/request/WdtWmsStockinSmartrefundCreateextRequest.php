<?php
/**
 * TOP API: 3ldsmu02o9.wdt.wms.stockin.smartrefund.createext request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class WdtWmsStockinSmartrefundCreateextRequest
{
	/** 
	 * 是否允许退货货品数量大于购买数量
	 **/
	private $createPreStockin;
	
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 退货货品详细信息
	 **/
	private $detailMapList;
	
	/** 
	 * 退货信息
	 **/
	private $refundInfo;
	
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
	
	public function setCreatePreStockin($createPreStockin)
	{
		$this->createPreStockin = $createPreStockin;
		$this->apiParas["createPreStockin"] = $createPreStockin;
	}

	public function getCreatePreStockin()
	{
		return $this->createPreStockin;
	}

	public function setDatetime($datetime)
	{
		$this->datetime = $datetime;
		$this->apiParas["datetime"] = $datetime;
	}

	public function getDatetime()
	{
		return $this->datetime;
	}

	public function setDetailMapList($detailMapList)
	{
		$this->detailMapList = $detailMapList;
		$this->apiParas["detailMapList"] = $detailMapList;
	}

	public function getDetailMapList()
	{
		return $this->detailMapList;
	}

	public function setRefundInfo($refundInfo)
	{
		$this->refundInfo = $refundInfo;
		$this->apiParas["refundInfo"] = $refundInfo;
	}

	public function getRefundInfo()
	{
		return $this->refundInfo;
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
		return "3ldsmu02o9.wdt.wms.stockin.smartrefund.createext";
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
