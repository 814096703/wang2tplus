<?php
/**
 * TOP API: taobao.place.store.update.label request
 * 
 * @author auto create
 * @since 1.0, 2020.06.08
 */
class PlaceStoreUpdateLabelRequest
{
	/** 
	 * 行业code
	 **/
	private $businessCode;
	
	/** 
	 * 标签id
	 **/
	private $labelIdList;
	
	/** 
	 * 标签类型
	 **/
	private $labelType;
	
	/** 
	 * 门店id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setBusinessCode($businessCode)
	{
		$this->businessCode = $businessCode;
		$this->apiParas["business_code"] = $businessCode;
	}

	public function getBusinessCode()
	{
		return $this->businessCode;
	}

	public function setLabelIdList($labelIdList)
	{
		$this->labelIdList = $labelIdList;
		$this->apiParas["label_id_list"] = $labelIdList;
	}

	public function getLabelIdList()
	{
		return $this->labelIdList;
	}

	public function setLabelType($labelType)
	{
		$this->labelType = $labelType;
		$this->apiParas["label_type"] = $labelType;
	}

	public function getLabelType()
	{
		return $this->labelType;
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
		return "taobao.place.store.update.label";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->labelIdList,999,"labelIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
