<?php
/**
 * TOP API: taobao.place.store.extend.add request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class PlaceStoreExtendAddRequest
{
	/** 
	 * 扩展信息
	 **/
	private $etv;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setEtv($etv)
	{
		$this->etv = $etv;
		$this->apiParas["etv"] = $etv;
	}

	public function getEtv()
	{
		return $this->etv;
	}

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
		return "taobao.place.store.extend.add";
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
