<?php
/**
 * TOP API: qimen.taobao.erp.returnorder.sync request
 * 
 * @author auto create
 * @since 1.0, 2017.08.28
 */
class TaobaoErpReturnorderSyncRequest
{
	/** 
	 * customerId
	 **/
	private $customerId;
	
	/** 
	 * 退货单信息
	 **/
	private $order;
	
	/** 
	 * 单据信息
	 **/
	private $process;
	
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

	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}

	public function setProcess($process)
	{
		$this->process = $process;
		$this->apiParas["process"] = $process;
	}

	public function getProcess()
	{
		return $this->process;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.returnorder.sync";
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
