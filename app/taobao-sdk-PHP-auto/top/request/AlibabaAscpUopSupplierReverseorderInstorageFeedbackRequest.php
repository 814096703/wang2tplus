<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.reverseorder.instorage.feedback request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class AlibabaAscpUopSupplierReverseorderInstorageFeedbackRequest
{
	/** 
	 * 销退单入库结果请求
	 **/
	private $instorageFeedbackRequest;
	
	private $apiParas = array();
	
	public function setInstorageFeedbackRequest($instorageFeedbackRequest)
	{
		$this->instorageFeedbackRequest = $instorageFeedbackRequest;
		$this->apiParas["instorage_feedback_request"] = $instorageFeedbackRequest;
	}

	public function getInstorageFeedbackRequest()
	{
		return $this->instorageFeedbackRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.reverseorder.instorage.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
