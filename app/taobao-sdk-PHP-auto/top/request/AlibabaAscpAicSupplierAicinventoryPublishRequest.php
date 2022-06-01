<?php
/**
 * TOP API: alibaba.ascp.aic.supplier.aicinventory.publish request
 * 
 * @author auto create
 * @since 1.0, 2020.10.13
 */
class AlibabaAscpAicSupplierAicinventoryPublishRequest
{
	/** 
	 * 库存发布请求参数
	 **/
	private $aicInventoryPublishRequest;
	
	private $apiParas = array();
	
	public function setAicInventoryPublishRequest($aicInventoryPublishRequest)
	{
		$this->aicInventoryPublishRequest = $aicInventoryPublishRequest;
		$this->apiParas["aic_inventory_publish_request"] = $aicInventoryPublishRequest;
	}

	public function getAicInventoryPublishRequest()
	{
		return $this->aicInventoryPublishRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.aic.supplier.aicinventory.publish";
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
