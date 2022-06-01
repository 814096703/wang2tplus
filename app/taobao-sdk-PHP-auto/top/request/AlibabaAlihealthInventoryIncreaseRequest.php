<?php
/**
 * TOP API: alibaba.alihealth.inventory.increase request
 * 
 * @author auto create
 * @since 1.0, 2020.10.14
 */
class AlibabaAlihealthInventoryIncreaseRequest
{
	/** 
	 * 商品条码
	 **/
	private $itemBarCode;
	
	/** 
	 * 幂等字段
	 **/
	private $outBizCode;
	
	/** 
	 * 增加库存数量
	 **/
	private $quantity;
	
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

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["out_biz_code"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
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
		return "alibaba.alihealth.inventory.increase";
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
