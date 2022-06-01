<?php
/**
 * TOP API: cainiao.smartdelivery.strategy.warehouse.i.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryStrategyWarehouseIDeleteRequest
{
	/** 
	 * 仓id
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
		$this->apiParas["warehouse_id"] = $warehouseId;
	}

	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.strategy.warehouse.i.delete";
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
