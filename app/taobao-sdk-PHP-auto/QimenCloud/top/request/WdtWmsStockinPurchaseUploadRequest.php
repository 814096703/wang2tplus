<?php
/**
 * TOP API: 3ldsmu02o9.wdt.wms.stockin.purchase.upload request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class WdtWmsStockinPurchaseUploadRequest
{
	/** 
	 * 时间戳
	 **/
	private $datetime;
	
	/** 
	 * 是否提交
	 **/
	private $isSubmit;
	
	/** 
	 * 入库单明细
	 **/
	private $stockinDetailList;
	
	/** 
	 * 入库单单据信息
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
	 * 签名
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

	public function setIsSubmit($isSubmit)
	{
		$this->isSubmit = $isSubmit;
		$this->apiParas["is_submit"] = $isSubmit;
	}

	public function getIsSubmit()
	{
		return $this->isSubmit;
	}

	public function setStockinDetailList($stockinDetailList)
	{
		$this->stockinDetailList = $stockinDetailList;
		$this->apiParas["stockin_detail_list"] = $stockinDetailList;
	}

	public function getStockinDetailList()
	{
		return $this->stockinDetailList;
	}

	public function setStockinOrder($stockinOrder)
	{
		$this->stockinOrder = $stockinOrder;
		$this->apiParas["stockin_order"] = $stockinOrder;
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
		return "3ldsmu02o9.wdt.wms.stockin.purchase.upload";
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
