<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stat.spec.sales.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class WdtStatSpecSalesQueryRequest
{
	/** 
	 * 发货日期
	 **/
	private $consignDate;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setConsignDate($consignDate)
	{
		$this->consignDate = $consignDate;
		$this->apiParas["consign_date"] = $consignDate;
	}

	public function getConsignDate()
	{
		return $this->consignDate;
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
		return "hu3cgwt0tc.wdt.stat.spec.sales.query";
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
