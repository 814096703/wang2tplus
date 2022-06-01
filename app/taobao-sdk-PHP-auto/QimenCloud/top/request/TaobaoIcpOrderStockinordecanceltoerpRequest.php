<?php
/**
 * TOP API: qimen.taobao.icp.order.stockinordecanceltoerp request
 * 
 * @author auto create
 * @since 1.0, 2018.03.30
 */
class TaobaoIcpOrderStockinordecanceltoerpRequest
{
	/** 
	 * 货主ID
	 **/
	private $customerId;
	
	/** 
	 * 订单列表
	 **/
	private $entryOrderlist;
	
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

	public function setEntryOrderlist($entryOrderlist)
	{
		$this->entryOrderlist = $entryOrderlist;
		$this->apiParas["entryOrderlist"] = $entryOrderlist;
	}

	public function getEntryOrderlist()
	{
		return $this->entryOrderlist;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.icp.order.stockinordecanceltoerp";
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
