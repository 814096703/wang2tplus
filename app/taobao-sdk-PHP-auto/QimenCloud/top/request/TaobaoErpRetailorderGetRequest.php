<?php
/**
 * TOP API: qimen.taobao.erp.retailorder.get request
 * 
 * @author auto create
 * @since 1.0, 2019.04.09
 */
class TaobaoErpRetailorderGetRequest
{
	/** 
	 * null
	 **/
	private $order;
	
	/** 
	 * 路由参数
	 **/
	private $customerId;
	
	/** 
	 * 订单详情
	 **/
	private $orderLine;
	
	private $apiParas = array();
	
	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["Order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}

	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setOrderLine($orderLine)
	{
		$this->orderLine = $orderLine;
		$this->apiParas["orderLine"] = $orderLine;
	}

	public function getOrderLine()
	{
		return $this->orderLine;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.retailorder.get";
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
