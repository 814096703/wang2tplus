<?php
/**
 * TOP API: taobao.omniorder.allocatedinfo.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderAllocatedinfoSyncRequest
{
	/** 
	 * 分单结果消息, 如果status为AllocateFail, 则表示失败的理由.
	 **/
	private $message;
	
	/** 
	 * 1231243213213
	 **/
	private $reportTimestamp;
	
	/** 
	 * 分单状态，如： 等待中(Waiting)，已分单(Allocated)，分单失败(AllocateFail)
	 **/
	private $status;
	
	/** 
	 * 门店的分单列表
	 **/
	private $subOrderList;
	
	/** 
	 * 淘宝交易主订单ID
	 **/
	private $tid;
	
	/** 
	 * 跟踪Id
	 **/
	private $traceId;
	
	private $apiParas = array();
	
	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setReportTimestamp($reportTimestamp)
	{
		$this->reportTimestamp = $reportTimestamp;
		$this->apiParas["report_timestamp"] = $reportTimestamp;
	}

	public function getReportTimestamp()
	{
		return $this->reportTimestamp;
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

	public function setSubOrderList($subOrderList)
	{
		$this->subOrderList = $subOrderList;
		$this->apiParas["sub_order_list"] = $subOrderList;
	}

	public function getSubOrderList()
	{
		return $this->subOrderList;
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

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.allocatedinfo.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reportTimestamp,"reportTimestamp");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
