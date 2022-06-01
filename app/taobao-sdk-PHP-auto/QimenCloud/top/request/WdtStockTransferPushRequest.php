<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.transfer.push request
 * 
 * @author auto create
 * @since 1.0, 2020.09.28
 */
class WdtStockTransferPushRequest
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
	private $transferInfo;
	
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

	public function setTransferInfo($transferInfo)
	{
		$this->transferInfo = $transferInfo;
		$this->apiParas["transfer_info"] = $transferInfo;
	}

	public function getTransferInfo()
	{
		return $this->transferInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stock.transfer.push";
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
