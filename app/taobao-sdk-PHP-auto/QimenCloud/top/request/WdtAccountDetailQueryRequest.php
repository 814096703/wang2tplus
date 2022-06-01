<?php
/**
 * TOP API: hu3cgwt0tc.wdt.account.detail.query request
 * 
 * @author auto create
 * @since 1.0, 2019.03.28
 */
class WdtAccountDetailQueryRequest
{
	/** 
	 * 主键
	 **/
	private $recId;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setRecId($recId)
	{
		$this->recId = $recId;
		$this->apiParas["rec_id"] = $recId;
	}

	public function getRecId()
	{
		return $this->recId;
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
		return "hu3cgwt0tc.wdt.account.detail.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->recId,"recId");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
