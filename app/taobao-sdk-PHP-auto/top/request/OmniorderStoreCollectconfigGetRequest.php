<?php
/**
 * TOP API: taobao.omniorder.store.collectconfig.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreCollectconfigGetRequest
{
	/** 
	 * 是否是活动期
	 **/
	private $activity;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setActivity($activity)
	{
		$this->activity = $activity;
		$this->apiParas["activity"] = $activity;
	}

	public function getActivity()
	{
		return $this->activity;
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
		return "taobao.omniorder.store.collectconfig.get";
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
