<?php
/**
 * TOP API: n570f4n5rn.zhy.orders.refund request
 * 
 * @author auto create
 * @since 1.0, 2019.01.07
 */
class ZhyOrdersRefundRequest
{
	/** 
	 * 退款单列表
	 **/
	private $refundOrders;
	
	private $apiParas = array();
	
	public function setRefundOrders($refundOrders)
	{
		$this->refundOrders = $refundOrders;
		$this->apiParas["refundOrders"] = $refundOrders;
	}

	public function getRefundOrders()
	{
		return $this->refundOrders;
	}

	public function getApiMethodName()
	{
		return "n570f4n5rn.zhy.orders.refund";
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
