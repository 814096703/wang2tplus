<?php
/**
 * TOP API: hu3cgwt0tc.wdt.trades.status.query request
 * 
 * @author auto create
 * @since 1.0, 2020.06.05
 */
class WdtTradesStatusQueryRequest
{
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 原始单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.trades.status.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
