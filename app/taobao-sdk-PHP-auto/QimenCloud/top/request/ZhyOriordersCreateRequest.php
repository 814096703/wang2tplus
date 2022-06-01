<?php
/**
 * TOP API: n570f4n5rn.zhy.oriorders.create request
 * 
 * @author auto create
 * @since 1.0, 2019.01.08
 */
class ZhyOriordersCreateRequest
{
	/** 
	 * 原始订单列表
	 **/
	private $oriOrders;
	
	private $apiParas = array();
	
	public function setOriOrders($oriOrders)
	{
		$this->oriOrders = $oriOrders;
		$this->apiParas["oriOrders"] = $oriOrders;
	}

	public function getOriOrders()
	{
		return $this->oriOrders;
	}

	public function getApiMethodName()
	{
		return "n570f4n5rn.zhy.oriorders.create";
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
