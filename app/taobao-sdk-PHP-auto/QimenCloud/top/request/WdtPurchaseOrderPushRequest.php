<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.order.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtPurchaseOrderPushRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 采购单信息
	 **/
	private $purchaseInfo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setPurchaseInfo($purchaseInfo)
	{
		$this->purchaseInfo = $purchaseInfo;
		$this->apiParas["purchase_info"] = $purchaseInfo;
	}

	public function getPurchaseInfo()
	{
		return $this->purchaseInfo;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.order.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
