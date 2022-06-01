<?php
/**
 * TOP API: taobao.omniorder.store.accpeted request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreAccpetedRequest
{
	/** 
	 * ISV系统上报时间
	 **/
	private $reportTimestamp;
	
	/** 
	 * 子订单列表
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
	
	public function setReportTimestamp($reportTimestamp)
	{
		$this->reportTimestamp = $reportTimestamp;
		$this->apiParas["report_timestamp"] = $reportTimestamp;
	}

	public function getReportTimestamp()
	{
		return $this->reportTimestamp;
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
		return "taobao.omniorder.store.accpeted";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reportTimestamp,"reportTimestamp");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
