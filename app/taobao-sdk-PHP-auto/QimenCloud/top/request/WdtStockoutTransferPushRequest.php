<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockout.transfer.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtStockoutTransferPushRequest
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
	 * 调拨出库数据
	 **/
	private $stockoutInfo;
	
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

	public function setStockoutInfo($stockoutInfo)
	{
		$this->stockoutInfo = $stockoutInfo;
		$this->apiParas["stockout_info"] = $stockoutInfo;
	}

	public function getStockoutInfo()
	{
		return $this->stockoutInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockout.transfer.push";
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
