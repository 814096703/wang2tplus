<?php
/**
 * TOP API: qimen.taobao.icp.order.stockinordermessagetoerp request
 * 
 * @author auto create
 * @since 1.0, 2018.09.07
 */
class TaobaoIcpOrderStockinordermessagetoerpRequest
{
	/** 
	 * 货主ID
	 **/
	private $customerId;
	
	/** 
	 * 入库单记录集
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
		return "qimen.taobao.icp.order.stockinordermessagetoerp";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerId,"customerId");
		RequestCheckUtil::checkMaxLength($this->customerId,64,"customerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
