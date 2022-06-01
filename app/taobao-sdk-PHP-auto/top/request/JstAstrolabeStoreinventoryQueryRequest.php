<?php
/**
 * TOP API: taobao.jst.astrolabe.storeinventory.query request
 * 
 * @author auto create
 * @since 1.0, 2019.01.10
 */
class JstAstrolabeStoreinventoryQueryRequest
{
	/** 
	 * 门店
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
		return "taobao.jst.astrolabe.storeinventory.query";
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
