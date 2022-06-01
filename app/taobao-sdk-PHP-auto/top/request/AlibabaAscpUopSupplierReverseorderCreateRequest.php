<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.reverseorder.create request
 * 
 * @author auto create
 * @since 1.0, 2020.04.30
 */
class AlibabaAscpUopSupplierReverseorderCreateRequest
{
	/** 
	 * 逆向销退单创建请求
	 **/
	private $reverseCreateRequest;
	
	private $apiParas = array();
	
	public function setReverseCreateRequest($reverseCreateRequest)
	{
		$this->reverseCreateRequest = $reverseCreateRequest;
		$this->apiParas["reverse_create_request"] = $reverseCreateRequest;
	}

	public function getReverseCreateRequest()
	{
		return $this->reverseCreateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.reverseorder.create";
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
