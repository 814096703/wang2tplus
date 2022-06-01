<?php
/**
 * TOP API: qimen.taobao.wms.returnapply.report request
 * 
 * @author auto create
 * @since 1.0, 2018.05.11
 */
class TaobaoWmsReturnapplyReportRequest
{
	/** 
	 * 创建日期
	 **/
	private $createDate;
	
	/** 
	 * 创建人
	 **/
	private $createEmp;
	
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * 订单编号
	 **/
	private $orderCode;
	
	/** 
	 * 退货明细
	 **/
	private $products;
	
	/** 
	 * 收货地址
	 **/
	private $receiveAddress;
	
	/** 
	 * 收货人电话
	 **/
	private $receiverMobile;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 物流公司
	 **/
	private $shippingCode;
	
	/** 
	 * 物流单号
	 **/
	private $shippingSn;
	
	/** 
	 * wms单号
	 **/
	private $uniqueKey;
	
	/** 
	 * 仓库代码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;
		$this->apiParas["createDate"] = $createDate;
	}

	public function getCreateDate()
	{
		return $this->createDate;
	}

	public function setCreateEmp($createEmp)
	{
		$this->createEmp = $createEmp;
		$this->apiParas["createEmp"] = $createEmp;
	}

	public function getCreateEmp()
	{
		return $this->createEmp;
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

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setProducts($products)
	{
		$this->products = $products;
		$this->apiParas["products"] = $products;
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function setReceiveAddress($receiveAddress)
	{
		$this->receiveAddress = $receiveAddress;
		$this->apiParas["receiveAddress"] = $receiveAddress;
	}

	public function getReceiveAddress()
	{
		return $this->receiveAddress;
	}

	public function setReceiverMobile($receiverMobile)
	{
		$this->receiverMobile = $receiverMobile;
		$this->apiParas["receiverMobile"] = $receiverMobile;
	}

	public function getReceiverMobile()
	{
		return $this->receiverMobile;
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

	public function setShippingCode($shippingCode)
	{
		$this->shippingCode = $shippingCode;
		$this->apiParas["shippingCode"] = $shippingCode;
	}

	public function getShippingCode()
	{
		return $this->shippingCode;
	}

	public function setShippingSn($shippingSn)
	{
		$this->shippingSn = $shippingSn;
		$this->apiParas["shippingSn"] = $shippingSn;
	}

	public function getShippingSn()
	{
		return $this->shippingSn;
	}

	public function setUniqueKey($uniqueKey)
	{
		$this->uniqueKey = $uniqueKey;
		$this->apiParas["uniqueKey"] = $uniqueKey;
	}

	public function getUniqueKey()
	{
		return $this->uniqueKey;
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

	public function getApiMethodName()
	{
		return "qimen.taobao.wms.returnapply.report";
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
