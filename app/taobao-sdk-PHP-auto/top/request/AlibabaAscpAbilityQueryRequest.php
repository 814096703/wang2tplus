<?php
/**
 * TOP API: alibaba.ascp.ability.query request
 * 
 * @author auto create
 * @since 1.0, 2019.05.24
 */
class AlibabaAscpAbilityQueryRequest
{
	/** 
	 * 库容查询请求内容
	 **/
	private $abilityQueryRequest;
	
	private $apiParas = array();
	
	public function setAbilityQueryRequest($abilityQueryRequest)
	{
		$this->abilityQueryRequest = $abilityQueryRequest;
		$this->apiParas["ability_query_request"] = $abilityQueryRequest;
	}

	public function getAbilityQueryRequest()
	{
		return $this->abilityQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.ability.query";
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
