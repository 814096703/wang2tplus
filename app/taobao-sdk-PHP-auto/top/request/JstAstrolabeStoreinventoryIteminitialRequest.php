<?php
/**
 * TOP API: taobao.jst.astrolabe.storeinventory.iteminitial request
 * 
 * @author auto create
 * @since 1.0, 2019.01.10
 */
class JstAstrolabeStoreinventoryIteminitialRequest
{
	/** 
	 * 操作时间
	 **/
	private $operationTime;
	
	/** 
	 * 门店列表
	 **/
	private $stores;
	
	private $apiParas = array();
	
	public function setOperationTime($operationTime)
	{
		$this->operationTime = $operationTime;
		$this->apiParas["operation_time"] = $operationTime;
	}

	public function getOperationTime()
	{
		return $this->operationTime;
	}

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
		return "taobao.jst.astrolabe.storeinventory.iteminitial";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operationTime,"operationTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
