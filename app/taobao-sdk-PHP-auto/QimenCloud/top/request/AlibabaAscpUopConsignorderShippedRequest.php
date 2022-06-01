<?php
/**
 * TOP API: qimen.alibaba.ascp.uop.consignorder.shipped request
 * 
 * @author auto create
 * @since 1.0, 2020.04.17
 */
class AlibabaAscpUopConsignorderShippedRequest
{
	/** 
	 * 服务路由ID
	 **/
	private $customerId;
	
	/** 
	 * 请求数据根节点
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "qimen.alibaba.ascp.uop.consignorder.shipped";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerId,"customerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
