<?php
/**
 * TOP API: alibaba.alihealth.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.14
 */
class AlibabaAlihealthInventoryQueryRequest
{
	/** 
	 * 条码
	 **/
	private $itemBarCode;
	
	/** 
	 * 供应商id
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setItemBarCode($itemBarCode)
	{
		$this->itemBarCode = $itemBarCode;
		$this->apiParas["item_bar_code"] = $itemBarCode;
	}

	public function getItemBarCode()
	{
		return $this->itemBarCode;
	}

	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function getApiMethodName()
	{
		return "alibaba.alihealth.inventory.query";
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
