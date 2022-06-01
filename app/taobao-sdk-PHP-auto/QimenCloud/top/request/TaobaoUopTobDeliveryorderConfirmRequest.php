<?php
/**
 * TOP API: qimen.taobao.uop.tob.deliveryorder.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TaobaoUopTobDeliveryorderConfirmRequest
{
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * tob出库确认对象
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
		return "qimen.taobao.uop.tob.deliveryorder.confirm";
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
