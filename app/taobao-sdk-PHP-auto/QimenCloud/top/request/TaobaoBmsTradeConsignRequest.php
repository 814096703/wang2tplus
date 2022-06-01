<?php
/**
 * TOP API: qimen.taobao.bms.trade.consign request
 * 
 * @author auto create
 * @since 1.0, 2018.09.06
 */
class TaobaoBmsTradeConsignRequest
{
	/** 
	 * 货主ID
	 **/
	private $customerId;
	
	/** 
	 * 请求实体
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
		return "qimen.taobao.bms.trade.consign";
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
