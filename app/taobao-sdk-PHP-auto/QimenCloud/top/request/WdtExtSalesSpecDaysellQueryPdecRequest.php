<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.sales.spec.daysell.query.pdec request
 * 
 * @author auto create
 * @since 1.0, 2020.07.17
 */
class WdtExtSalesSpecDaysellQueryPdecRequest
{
	/** 
	 * 发货日期
	 **/
	private $salesDate;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setSalesDate($salesDate)
	{
		$this->salesDate = $salesDate;
		$this->apiParas["sales_date"] = $salesDate;
	}

	public function getSalesDate()
	{
		return $this->salesDate;
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
		return "hu3cgwt0tc.wdt.ext.sales.spec.daysell.query.pdec";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->salesDate,"salesDate");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
