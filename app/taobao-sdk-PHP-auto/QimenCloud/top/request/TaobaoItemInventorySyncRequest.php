<?php
/**
 * TOP API: qimen.taobao.item.inventory.sync request
 * 
 * @author auto create
 * @since 1.0, 2017.08.28
 */
class TaobaoItemInventorySyncRequest
{
	/** 
	 * 库存列表
	 **/
	private $criteriaList;
	
	/** 
	 * customerId
	 **/
	private $customerId;
	
	private $apiParas = array();
	
	public function setCriteriaList($criteriaList)
	{
		$this->criteriaList = $criteriaList;
		$this->apiParas["criteriaList"] = $criteriaList;
	}

	public function getCriteriaList()
	{
		return $this->criteriaList;
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

	public function getApiMethodName()
	{
		return "qimen.taobao.item.inventory.sync";
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
