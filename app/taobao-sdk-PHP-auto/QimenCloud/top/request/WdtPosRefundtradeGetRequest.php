<?php
/**
 * TOP API: rq122772bg.wdt.pos.refundtrade.get request
 * 
 * @author auto create
 * @since 1.0, 2020.04.23
 */
class WdtPosRefundtradeGetRequest
{
	/** 
	 * 查询结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页码，默认1
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小，默认100
	 **/
	private $rowsPerPage;
	
	/** 
	 * 客户卖家账号
	 **/
	private $sid;
	
	/** 
	 * 查询开始时间
	 **/
	private $startTime;
	
	/** 
	 * 订单状态
	 **/
	private $status;
	
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

	public function setRowsPerPage($rowsPerPage)
	{
		$this->rowsPerPage = $rowsPerPage;
		$this->apiParas["rows_per_page"] = $rowsPerPage;
	}

	public function getRowsPerPage()
	{
		return $this->rowsPerPage;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "rq122772bg.wdt.pos.refundtrade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
