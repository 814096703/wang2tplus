<?php
/**
 * TOP API: qimen.taobao.wms.paidorder.sync request
 * 
 * @author auto create
 * @since 1.0, 2017.08.28
 */
class TaobaoWmsPaidorderSyncRequest
{
	/** 
	 * 批次信息
	 **/
	private $batchs;
	
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * 实收单信息
	 **/
	private $orderLines;
	
	/** 
	 * 实收单信息
	 **/
	private $returnOrder;
	
	private $apiParas = array();
	
	public function setBatchs($batchs)
	{
		$this->batchs = $batchs;
		$this->apiParas["batchs"] = $batchs;
	}

	public function getBatchs()
	{
		return $this->batchs;
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
		return "qimen.taobao.wms.paidorder.sync";
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
