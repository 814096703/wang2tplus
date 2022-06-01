<?php
/**
 * TOP API: taobao.omniorder.store.deliverconfig.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreDeliverconfigUpdateRequest
{
	/** 
	 * 卖家发货配置
	 **/
	private $storeDeliverConfig;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setStoreDeliverConfig($storeDeliverConfig)
	{
		$this->storeDeliverConfig = $storeDeliverConfig;
		$this->apiParas["store_deliver_config"] = $storeDeliverConfig;
	}

	public function getStoreDeliverConfig()
	{
		return $this->storeDeliverConfig;
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
		return "taobao.omniorder.store.deliverconfig.update";
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
