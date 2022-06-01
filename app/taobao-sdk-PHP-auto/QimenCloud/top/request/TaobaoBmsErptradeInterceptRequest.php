<?php
/**
 * TOP API: qimen.taobao.bms.erptrade.intercept request
 * 
 * @author auto create
 * @since 1.0, 2018.09.21
 */
class TaobaoBmsErptradeInterceptRequest
{
	/** 
	 * 货主ID
	 **/
	private $customerId;
	
	/** 
	 * 请求主体
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
		return "qimen.taobao.bms.erptrade.intercept";
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
