<?php
/**
 * TOP API: 3ldsmu02o9.wdt.purchase.purchasereturn.createorder request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class WdtPurchasePurchasereturnCreateorderRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 采购退货单明细信息
	 **/
	private $detailList;
	
	/** 
	 * 是否提交
	 **/
	private $isSubmit;
	
	/** 
	 * 采购退货单单据信息
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

	public function setDetailList($detailList)
	{
		$this->detailList = $detailList;
		$this->apiParas["detailList"] = $detailList;
	}

	public function getDetailList()
	{
		return $this->detailList;
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
		return "3ldsmu02o9.wdt.purchase.purchasereturn.createorder";
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
