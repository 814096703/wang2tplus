<?php
/**
 * TOP API: tmall.nr.order.query.jst request
 * 
 * @author auto create
 * @since 1.0, 2019.09.23
 */
class TmallNrOrderQueryJstRequest
{
	/** 
	 * 业务标识，dss标识定时送业务；jsd表示极速达业务
	 **/
	private $bizIdentity;
	
	/** 
	 * 预留-扩展信息
	 **/
	private $extParam;
	
	/** 
	 * 交易主订单号
	 **/
	private $orderId;
	
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

	public function setExtParam($extParam)
	{
		$this->extParam = $extParam;
		$this->apiParas["ext_param"] = $extParam;
	}

	public function getExtParam()
	{
		return $this->extParam;
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
		return "tmall.nr.order.query.jst";
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
