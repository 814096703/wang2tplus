<?php
/**
 * TOP API: hu3cgwt0tc.wdt.logistics.sync.ack request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtLogisticsSyncAckRequest
{
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 物流同步状态回传列表
	 **/
	private $logisticsList;
	
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

	public function setLogisticsList($logisticsList)
	{
		$this->logisticsList = $logisticsList;
		$this->apiParas["logistics_list"] = $logisticsList;
	}

	public function getLogisticsList()
	{
		return $this->logisticsList;
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
		return "hu3cgwt0tc.wdt.logistics.sync.ack";
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
