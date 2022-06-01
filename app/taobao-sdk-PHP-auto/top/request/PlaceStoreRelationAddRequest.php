<?php
/**
 * TOP API: taobao.place.store.relation.add request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class PlaceStoreRelationAddRequest
{
	/** 
	 * 关系B的门店ID
	 **/
	private $outerId;
	
	/** 
	 * 关系类型(outer_id是主, store_id是从)
	 **/
	private $relationType;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setRelationType($relationType)
	{
		$this->relationType = $relationType;
		$this->apiParas["relation_type"] = $relationType;
	}

	public function getRelationType()
	{
		return $this->relationType;
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
		return "taobao.place.store.relation.add";
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
