<?php
/**
 * TOP API: tmall.nr.fulfill.logistics.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallNrFulfillLogisticsQueryRequest
{
	/** 
	 * 业务标识，dss标识定时送业务；jsd表示极速达业务
	 **/
	private $bizIdentity;
	
	/** 
	 * 交易主订单号
	 **/
	private $mainOrderId;
	
	private $apiParas = array();
	
	public function setBizIdentity($bizIdentity)
	{
		$this->bizIdentity = $bizIdentity;
		$this->apiParas["biz_identity"] = $bizIdentity;
	}

	public function getBizIdentity()
	{
		return $this->bizIdentity;
	}

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
		return "tmall.nr.fulfill.logistics.query";
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
