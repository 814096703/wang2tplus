<?php
/**
 * TOP API: qimen.alibaba.ascp.channel.salesorder.received request
 * 
 * @author auto create
 * @since 1.0, 2020.03.26
 */
class AlibabaAscpChannelSalesorderReceivedRequest
{
	/** 
	 * 服务路由ID
	 **/
	private $customerId;
	
	/** 
	 * null
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
		return "qimen.alibaba.ascp.channel.salesorder.received";
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
