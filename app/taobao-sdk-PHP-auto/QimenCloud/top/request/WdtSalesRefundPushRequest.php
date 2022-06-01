<?php
/**
 * TOP API: hu3cgwt0tc.wdt.sales.refund.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtSalesRefundPushRequest
{
	/** 
	 * 退款单信息
	 **/
	private $apiRefundList;
	
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setApiRefundList($apiRefundList)
	{
		$this->apiRefundList = $apiRefundList;
		$this->apiParas["api_refund_list"] = $apiRefundList;
	}

	public function getApiRefundList()
	{
		return $this->apiRefundList;
	}

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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.sales.refund.push";
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
