<?php
/**
 * TOP API: tmall.hk.clearance.get request
 * 
 * @author auto create
 * @since 1.0, 2019.12.11
 */
class TmallHkClearanceGetRequest
{
	/** 
	 * 是否需要身份证图片，不需要可以缩短接口响应时间
	 **/
	private $needImage;
	
	/** 
	 * 天猫国际订单号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setNeedImage($needImage)
	{
		$this->needImage = $needImage;
		$this->apiParas["need_image"] = $needImage;
	}

	public function getNeedImage()
	{
		return $this->needImage;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "tmall.hk.clearance.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
