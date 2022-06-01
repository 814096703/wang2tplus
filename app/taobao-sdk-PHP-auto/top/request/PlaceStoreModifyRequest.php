<?php
/**
 * TOP API: taobao.place.store.modify request
 * 
 * @author auto create
 * @since 1.0, 2020.07.08
 */
class PlaceStoreModifyRequest
{
	/** 
	 * 门店创建入参
	 **/
	private $storeUpdate;
	
	private $apiParas = array();
	
	public function setStoreUpdate($storeUpdate)
	{
		$this->storeUpdate = $storeUpdate;
		$this->apiParas["store_update"] = $storeUpdate;
	}

	public function getStoreUpdate()
	{
		return $this->storeUpdate;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
