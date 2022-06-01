<?php
/**
 * TOP API: hu3cgwt0tc.wdt.pick.order.query request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtPickOrderQueryRequest
{
	/** 
	 * 分拣单号
	 **/
	private $pickNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setPickNo($pickNo)
	{
		$this->pickNo = $pickNo;
		$this->apiParas["pick_no"] = $pickNo;
	}

	public function getPickNo()
	{
		return $this->pickNo;
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
		return "hu3cgwt0tc.wdt.pick.order.query";
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
