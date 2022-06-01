<?php
/**
 * TOP API: qimen.taobao.wms.returnorder.sync request
 * 
 * @author auto create
 * @since 1.0, 2017.08.18
 */
class TaobaoWmsReturnorderSyncRequest
{
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * 单据信息
	 **/
	private $orderLines;
	
	/** 
	 * 退货单信息
	 **/
	private $returnOrder;
	
	private $apiParas = array();
	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setOrderLines($orderLines)
	{
		$this->orderLines = $orderLines;
		$this->apiParas["order_Lines"] = $orderLines;
	}

	public function getOrderLines()
	{
		return $this->orderLines;
	}

	public function setReturnOrder($returnOrder)
	{
		$this->returnOrder = $returnOrder;
		$this->apiParas["return_Order"] = $returnOrder;
	}

	public function getReturnOrder()
	{
		return $this->returnOrder;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.wms.returnorder.sync";
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
