<?php
/**
 * TOP API: taobao.place.store.itemstore.band request
 * 
 * @author auto create
 * @since 1.0, 2020.08.04
 */
class PlaceStoreItemstoreBandRequest
{
	/** 
	 * 操作类型
	 **/
	private $actionType;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 门店id
	 **/
	private $storeIds;
	
	private $apiParas = array();
	
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["action_type"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setStoreIds($storeIds)
	{
		$this->storeIds = $storeIds;
		$this->apiParas["store_ids"] = $storeIds;
	}

	public function getStoreIds()
	{
		return $this->storeIds;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.itemstore.band";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->storeIds,999,"storeIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
