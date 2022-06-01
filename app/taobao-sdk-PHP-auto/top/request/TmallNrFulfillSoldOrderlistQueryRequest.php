<?php
/**
 * TOP API: tmall.nr.fulfill.sold.orderlist.query request
 * 
 * @author auto create
 * @since 1.0, 2020.07.31
 */
class TmallNrFulfillSoldOrderlistQueryRequest
{
	/** 
	 * 入参对象
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "tmall.nr.fulfill.sold.orderlist.query";
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
