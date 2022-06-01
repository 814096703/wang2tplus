<?php
/**
 * TOP API: taobao.place.storecategory.get request
 * 
 * @author auto create
 * @since 1.0, 2018.11.23
 */
class PlaceStorecategoryGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.place.storecategory.get";
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
