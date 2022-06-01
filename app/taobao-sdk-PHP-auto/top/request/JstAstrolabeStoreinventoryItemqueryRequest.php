<?php
/**
 * TOP API: taobao.jst.astrolabe.storeinventory.itemquery request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class JstAstrolabeStoreinventoryItemqueryRequest
{
	/** 
	 * 门店信息
	 **/
	private $stores;
	
	private $apiParas = array();
	
	public function setStores($stores)
	{
		$this->stores = $stores;
		$this->apiParas["stores"] = $stores;
	}

	public function getStores()
	{
		return $this->stores;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.astrolabe.storeinventory.itemquery";
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
