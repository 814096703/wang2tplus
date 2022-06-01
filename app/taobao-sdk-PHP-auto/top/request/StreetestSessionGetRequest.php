<?php
/**
 * TOP API: taobao.streetest.session.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class StreetestSessionGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.streetest.session.get";
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
