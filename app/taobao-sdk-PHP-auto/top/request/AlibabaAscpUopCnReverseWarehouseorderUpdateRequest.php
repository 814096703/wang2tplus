<?php
/**
 * TOP API: alibaba.ascp.uop.cn.reverse.warehouseorder.update request
 * 
 * @author auto create
 * @since 1.0, 2020.05.18
 */
class AlibabaAscpUopCnReverseWarehouseorderUpdateRequest
{
	/** 
	 * 逆向入库单号
	 **/
	private $orderCode;
	
	/** 
	 * 退款原因
	 **/
	private $refundReason;
	
	/** 
	 * 是否已经退款
	 **/
	private $refunded;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setRefundReason($refundReason)
	{
		$this->refundReason = $refundReason;
		$this->apiParas["refund_reason"] = $refundReason;
	}

	public function getRefundReason()
	{
		return $this->refundReason;
	}

	public function setRefunded($refunded)
	{
		$this->refunded = $refunded;
		$this->apiParas["refunded"] = $refunded;
	}

	public function getRefunded()
	{
		return $this->refunded;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.cn.reverse.warehouseorder.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->refundReason,"refundReason");
		RequestCheckUtil::checkNotNull($this->refunded,"refunded");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
