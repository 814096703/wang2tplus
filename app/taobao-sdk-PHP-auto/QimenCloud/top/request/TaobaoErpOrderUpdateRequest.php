<?php
/**
 * TOP API: qimen.taobao.erp.order.update request
 * 
 * @author auto create
 * @since 1.0, 2017.08.07
 */
class TaobaoErpOrderUpdateRequest
{
	/** 
	 * 手续费
	 **/
	private $codFee;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 详情
	 **/
	private $items;
	
	/** 
	 * 订单应付款
	 **/
	private $orderAmount;
	
	/** 
	 * 订单编号
	 **/
	private $orderSn;
	
	/** 
	 * 订单已付款
	 **/
	private $payment;
	
	/** 
	 * 快递费
	 **/
	private $shippingFee;
	
	private $apiParas = array();
	
	public function setCodFee($codFee)
	{
		$this->codFee = $codFee;
		$this->apiParas["cod_fee"] = $codFee;
	}

	public function getCodFee()
	{
		return $this->codFee;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setOrderAmount($orderAmount)
	{
		$this->orderAmount = $orderAmount;
		$this->apiParas["order_amount"] = $orderAmount;
	}

	public function getOrderAmount()
	{
		return $this->orderAmount;
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
		$this->apiParas["order_sn"] = $orderSn;
	}

	public function getOrderSn()
	{
		return $this->orderSn;
	}

	public function setPayment($payment)
	{
		$this->payment = $payment;
		$this->apiParas["payment"] = $payment;
	}

	public function getPayment()
	{
		return $this->payment;
	}

	public function setShippingFee($shippingFee)
	{
		$this->shippingFee = $shippingFee;
		$this->apiParas["shipping_fee"] = $shippingFee;
	}

	public function getShippingFee()
	{
		return $this->shippingFee;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.order.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->codFee,21,"codFee");
		RequestCheckUtil::checkMaxLength($this->orderAmount,21,"orderAmount");
		RequestCheckUtil::checkMaxLength($this->orderSn,64,"orderSn");
		RequestCheckUtil::checkMaxLength($this->payment,21,"payment");
		RequestCheckUtil::checkMaxLength($this->shippingFee,21,"shippingFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
