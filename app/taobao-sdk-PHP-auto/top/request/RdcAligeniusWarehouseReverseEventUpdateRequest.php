<?php
/**
 * TOP API: taobao.rdc.aligenius.warehouse.reverse.event.update request
 * 
 * @author auto create
 * @since 1.0, 2019.01.31
 */
class RdcAligeniusWarehouseReverseEventUpdateRequest
{
	/** 
	 * 参数
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
		return "taobao.rdc.aligenius.warehouse.reverse.event.update";
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
