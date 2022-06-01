<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockin.transfer.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtStockinTransferPushRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 调拨单信息
	 **/
	private $stockinInfo;
	
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStockinInfo($stockinInfo)
	{
		$this->stockinInfo = $stockinInfo;
		$this->apiParas["stockin_info"] = $stockinInfo;
	}

	public function getStockinInfo()
	{
		return $this->stockinInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockin.transfer.push";
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
