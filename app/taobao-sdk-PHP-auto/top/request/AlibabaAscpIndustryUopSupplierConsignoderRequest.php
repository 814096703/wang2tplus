<?php
/**
 * TOP API: alibaba.ascp.industry.uop.supplier.consignoder request
 * 
 * @author auto create
 * @since 1.0, 2020.06.05
 */
class AlibabaAscpIndustryUopSupplierConsignoderRequest
{
	/** 
	 * 发货主单信息
	 **/
	private $erpNormalConsignOrderRequest;
	
	private $apiParas = array();
	
	public function setErpNormalConsignOrderRequest($erpNormalConsignOrderRequest)
	{
		$this->erpNormalConsignOrderRequest = $erpNormalConsignOrderRequest;
		$this->apiParas["erp_normal_consign_order_request"] = $erpNormalConsignOrderRequest;
	}

	public function getErpNormalConsignOrderRequest()
	{
		return $this->erpNormalConsignOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.uop.supplier.consignoder";
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
