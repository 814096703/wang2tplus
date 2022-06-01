<?php
/**
 * TOP API: taobao.place.store.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.08.20
 */
class PlaceStoreDeleteRequest
{
	/** 
	 * 门店id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
