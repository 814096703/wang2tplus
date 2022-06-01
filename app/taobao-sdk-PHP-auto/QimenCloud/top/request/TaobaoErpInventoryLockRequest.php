<?php
/**
 * TOP API: qimen.taobao.erp.inventory.lock request
 * 
 * @author auto create
 * @since 1.0, 2018.08.09
 */
class TaobaoErpInventoryLockRequest
{
	/** 
	 * 金额
	 **/
	private $amount;
	
	/** 
	 * 数量
	 **/
	private $number;
	
	/** 
	 * 客户代码
	 **/
	private $customerCode;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 订单创建日期
	 **/
	private $orderCreateTime;
	
	/** 
	 * 源单据号
	 **/
	private $orderId;
	
	/** 
	 * 业务类型（Lock=库存锁定）
	 **/
	private $orderType;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 商品详情
	 **/
	private $sku;
	
	/** 
	 * 仓库代码（发货仓库）
	 **/
	private $warehouseCode;
	
	/** 
	 * 库区代码
	 **/
	private $whareaTypeCode;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["Amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["Number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setCustomerCode($customerCode)
	{
		$this->customerCode = $customerCode;
		$this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode()
	{
		return $this->customerCode;
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

	public function setOrderCreateTime($orderCreateTime)
	{
		$this->orderCreateTime = $orderCreateTime;
		$this->apiParas["orderCreateTime"] = $orderCreateTime;
	}

	public function getOrderCreateTime()
	{
		return $this->orderCreateTime;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSku($sku)
	{
		$this->sku = $sku;
		$this->apiParas["sku"] = $sku;
	}

	public function getSku()
	{
		return $this->sku;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function setWhareaTypeCode($whareaTypeCode)
	{
		$this->whareaTypeCode = $whareaTypeCode;
		$this->apiParas["whareaTypeCode"] = $whareaTypeCode;
	}

	public function getWhareaTypeCode()
	{
		return $this->whareaTypeCode;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.inventory.lock";
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
