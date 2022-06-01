<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.stockin.refund.query.donlim request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtExtStockinRefundQueryDonlimRequest
{
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	/** 
	 * 入库单号
	 **/
	private $stockinNo;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStockinNo($stockinNo)
	{
		$this->stockinNo = $stockinNo;
		$this->apiParas["stockin_no"] = $stockinNo;
	}

	public function getStockinNo()
	{
		return $this->stockinNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.ext.stockin.refund.query.donlim";
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
