<?php
/**
 * TOP API: q3x5704t91.wdt.top.trade.rates.get request
 * 
 * @author auto create
 * @since 1.0, 2020.06.08
 */
class WdtTopTradeRatesGetRequest
{
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 原始单号
	 **/
	private $tid;
	
	/** 
	 * vpubaoappkey
	 **/
	private $vpubaoAppkey;
	
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

	public function setVpubaoAppkey($vpubaoAppkey)
	{
		$this->vpubaoAppkey = $vpubaoAppkey;
		$this->apiParas["vpubao_appkey"] = $vpubaoAppkey;
	}

	public function getVpubaoAppkey()
	{
		return $this->vpubaoAppkey;
	}

	public function getApiMethodName()
	{
		return "q3x5704t91.wdt.top.trade.rates.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkNotNull($this->vpubaoAppkey,"vpubaoAppkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
