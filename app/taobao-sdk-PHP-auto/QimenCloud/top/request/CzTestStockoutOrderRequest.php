<?php
/**
 * TOP API: 63814n6fhk.cz.test.stockout.order request
 * 
 * @author auto create
 * @since 1.0, 2020.06.30
 */
class CzTestStockoutOrderRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "63814n6fhk.cz.test.stockout.order";
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
