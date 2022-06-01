<?php
/**
 * TOP API: qimen.taobao.icp.order.stockoutordecanceltoerp request
 * 
 * @author auto create
 * @since 1.0, 2018.03.30
 */
class TaobaoIcpOrderStockoutordecanceltoerpRequest
{
	/** 
	 * 出库单所属货主ID
	 **/
	private $customerId;
	
	/** 
	 * 出入库单信息（一单）
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
		return "qimen.taobao.icp.order.stockoutordecanceltoerp";
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
