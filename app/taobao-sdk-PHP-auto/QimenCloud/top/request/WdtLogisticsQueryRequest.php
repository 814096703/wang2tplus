<?php
/**
 * TOP API: hu3cgwt0tc.wdt.logistics.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtLogisticsQueryRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 物流公司名称
	 **/
	private $logisticsName;
	
	/** 
	 * 物流编号
	 **/
	private $logisticsNo;
	
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

	public function setLogisticsName($logisticsName)
	{
		$this->logisticsName = $logisticsName;
		$this->apiParas["logistics_name"] = $logisticsName;
	}

	public function getLogisticsName()
	{
		return $this->logisticsName;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
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
		return "hu3cgwt0tc.wdt.logistics.query";
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
