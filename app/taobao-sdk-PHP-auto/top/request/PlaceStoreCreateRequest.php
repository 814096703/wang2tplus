<?php
/**
 * TOP API: taobao.place.store.create request
 * 
 * @author auto create
 * @since 1.0, 2020.07.08
 */
class PlaceStoreCreateRequest
{
	/** 
	 * 门店创建入参
	 **/
	private $storeCreate;
	
	private $apiParas = array();
	
	public function setStoreCreate($storeCreate)
	{
		$this->storeCreate = $storeCreate;
		$this->apiParas["store_create"] = $storeCreate;
	}

	public function getStoreCreate()
	{
		return $this->storeCreate;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.create";
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
