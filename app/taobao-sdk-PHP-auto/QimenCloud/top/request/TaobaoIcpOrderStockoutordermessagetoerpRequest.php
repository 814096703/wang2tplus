<?php
/**
 * TOP API: qimen.taobao.icp.order.stockoutordermessagetoerp request
 * 
 * @author auto create
 * @since 1.0, 2018.09.07
 */
class TaobaoIcpOrderStockoutordermessagetoerpRequest
{
	/** 
	 * 货主ID
	 **/
	private $customerId;
	
	/** 
	 * 出库单记录集
	 **/
	private $entryOutOrderlist;
	
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

	public function setEntryOutOrderlist($entryOutOrderlist)
	{
		$this->entryOutOrderlist = $entryOutOrderlist;
		$this->apiParas["entryOutOrderlist"] = $entryOutOrderlist;
	}

	public function getEntryOutOrderlist()
	{
		return $this->entryOutOrderlist;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.icp.order.stockoutordermessagetoerp";
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
