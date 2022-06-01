<?php
/**
 * TOP API: taobao.omniorder.store.collectconfig.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreCollectconfigUpdateRequest
{
	/** 
	 * 门店自提配置
	 **/
	private $storeCollectConfig;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setStoreCollectConfig($storeCollectConfig)
	{
		$this->storeCollectConfig = $storeCollectConfig;
		$this->apiParas["store_collect_config"] = $storeCollectConfig;
	}

	public function getStoreCollectConfig()
	{
		return $this->storeCollectConfig;
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
		return "taobao.omniorder.store.collectconfig.update";
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
