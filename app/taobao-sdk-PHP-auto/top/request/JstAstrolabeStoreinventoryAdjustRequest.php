<?php
/**
 * TOP API: taobao.jst.astrolabe.storeinventory.adjust request
 * 
 * @author auto create
 * @since 1.0, 2019.01.10
 */
class JstAstrolabeStoreinventoryAdjustRequest
{
	/** 
	 * 库存调整信息
	 **/
	private $inventoryAdjustInfo;
	
	/** 
	 * 操作时间
	 **/
	private $operationTime;
	
	private $apiParas = array();
	
	public function setInventoryAdjustInfo($inventoryAdjustInfo)
	{
		$this->inventoryAdjustInfo = $inventoryAdjustInfo;
		$this->apiParas["inventory_adjust_info"] = $inventoryAdjustInfo;
	}

	public function getInventoryAdjustInfo()
	{
		return $this->inventoryAdjustInfo;
	}

	public function setOperationTime($operationTime)
	{
		$this->operationTime = $operationTime;
		$this->apiParas["operation_time"] = $operationTime;
	}

	public function getOperationTime()
	{
		return $this->operationTime;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.astrolabe.storeinventory.adjust";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operationTime,"operationTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
