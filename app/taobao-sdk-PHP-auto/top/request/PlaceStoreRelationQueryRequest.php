<?php
/**
 * TOP API: taobao.place.store.relation.query request
 * 
 * @author auto create
 * @since 1.0, 2020.08.04
 */
class PlaceStoreRelationQueryRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $paramStoreRelationSimpleQuery;
	
	private $apiParas = array();
	
	public function setParamStoreRelationSimpleQuery($paramStoreRelationSimpleQuery)
	{
		$this->paramStoreRelationSimpleQuery = $paramStoreRelationSimpleQuery;
		$this->apiParas["param_store_relation_simple_query"] = $paramStoreRelationSimpleQuery;
	}

	public function getParamStoreRelationSimpleQuery()
	{
		return $this->paramStoreRelationSimpleQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.relation.query";
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
