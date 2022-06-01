<?php
/**
 * TOP API: taobao.qimen.orderstatus.update request
 * 
 * @author auto create
 * @since 1.0, 2019.10.11
 */
class QimenOrderstatusUpdateRequest
{
	/** 
	 * 事件发生时间
	 **/
	private $actionTime;
	
	/** 
	 * 星盘派单号
	 **/
	private $allocationCode;
	
	/** 
	 * 操作人
	 **/
	private $operator;
	
	/** 
	 * 淘系子订单号
	 **/
	private $orderCodes;
	
	/** 
	 * 订单状态，门店发货包括X_SHOP_ALLOCATION、X_SHOP_DENYX_SHOP_HANDLED、X_SHOP_CANCEL_CONFIRM、X_SHOP_CANCEL_DENIED、X_MATCHED；门店自提包括X_COMMODITY_CONFIRMX_COMMODITY_TRANSER、X_TRANSFER _SUCCESS、X_SHOP_CANCEL_CONFIRM、X_MATCHED、X_SHOP_DENY
	 **/
	private $status;
	
	/** 
	 * 目标门店的商户中心门店编码
	 **/
	private $storeId;
	
	/** 
	 * 业务类型，（枚举值：FAHUO、ZITI）
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setActionTime($actionTime)
	{
		$this->actionTime = $actionTime;
		$this->apiParas["action_time"] = $actionTime;
	}

	public function getActionTime()
	{
		return $this->actionTime;
	}

	public function setAllocationCode($allocationCode)
	{
		$this->allocationCode = $allocationCode;
		$this->apiParas["allocation_code"] = $allocationCode;
	}

	public function getAllocationCode()
	{
		return $this->allocationCode;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOrderCodes($orderCodes)
	{
		$this->orderCodes = $orderCodes;
		$this->apiParas["order_codes"] = $orderCodes;
	}

	public function getOrderCodes()
	{
		return $this->orderCodes;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.orderstatus.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->allocationCode,"allocationCode");
		RequestCheckUtil::checkNotNull($this->operator,"operator");
		RequestCheckUtil::checkNotNull($this->orderCodes,"orderCodes");
		RequestCheckUtil::checkMaxListSize($this->orderCodes,100,"orderCodes");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
