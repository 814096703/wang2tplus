<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.consignorder.cancel.feedback request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class AlibabaAscpUopSupplierConsignorderCancelFeedbackRequest
{
	/** 
	 * 取消发货反馈回告请求
	 **/
	private $consignorderCancelFeedbackRequest;
	
	private $apiParas = array();
	
	public function setConsignorderCancelFeedbackRequest($consignorderCancelFeedbackRequest)
	{
		$this->consignorderCancelFeedbackRequest = $consignorderCancelFeedbackRequest;
		$this->apiParas["consignorder_cancel_feedback_request"] = $consignorderCancelFeedbackRequest;
	}

	public function getConsignorderCancelFeedbackRequest()
	{
		return $this->consignorderCancelFeedbackRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.consignorder.cancel.feedback";
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
