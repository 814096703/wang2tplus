<?php
/**
 * TOP API: qimen.taobao.auto.entryorder.giftitemcancel request
 * 
 * @author auto create
 * @since 1.0, 2018.04.24
 */
class TaobaoAutoEntryorderGiftitemcancelRequest
{
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * 请求
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
		return "qimen.taobao.auto.entryorder.giftitemcancel";
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
