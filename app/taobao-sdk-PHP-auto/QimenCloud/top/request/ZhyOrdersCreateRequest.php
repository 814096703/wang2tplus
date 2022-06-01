<?php
/**
 * TOP API: n570f4n5rn.zhy.orders.create request
 * 
 * @author auto create
 * @since 1.0, 2018.09.17
 */
class ZhyOrdersCreateRequest
{
	/** 
	 * 子订单列表
	 **/
	private $orders;
	
	private $apiParas = array();
	
	public function setOrders($orders)
	{
		$this->orders = $orders;
		$this->apiParas["orders"] = $orders;
	}

	public function getOrders()
	{
		return $this->orders;
	}

	public function getApiMethodName()
	{
		return "n570f4n5rn.zhy.orders.create";
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
