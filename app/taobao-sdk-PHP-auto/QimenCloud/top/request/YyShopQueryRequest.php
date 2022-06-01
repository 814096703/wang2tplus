<?php
/**
 * TOP API: ai56a54l00.yy.shop.query request
 * 
 * @author auto create
 * @since 1.0, 2020.09.05
 */
class YyShopQueryRequest
{
	/** 
	 * 11
	 **/
	private $id;
	
	/** 
	 * 11
	 **/
	private $storeName;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["Id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function getApiMethodName()
	{
		return "ai56a54l00.yy.shop.query";
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
