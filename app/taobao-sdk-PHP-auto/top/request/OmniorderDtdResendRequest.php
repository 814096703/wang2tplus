<?php
/**
 * TOP API: taobao.omniorder.dtd.resend request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderDtdResendRequest
{
	/** 
	 * 淘宝主订单ID
	 **/
	private $mainOrderId;
	
	private $apiParas = array();
	
	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.dtd.resend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
