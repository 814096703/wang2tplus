<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.reverseorder.instorage.result request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class AlibabaAscpUopSupplierReverseorderInstorageResultRequest
{
	/** 
	 * 消退入库单结果请求
	 **/
	private $instorageResultRequest;
	
	private $apiParas = array();
	
	public function setInstorageResultRequest($instorageResultRequest)
	{
		$this->instorageResultRequest = $instorageResultRequest;
		$this->apiParas["instorage_result_request"] = $instorageResultRequest;
	}

	public function getInstorageResultRequest()
	{
		return $this->instorageResultRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.reverseorder.instorage.result";
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
