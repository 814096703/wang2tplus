<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.consignorder.outofstock.callback request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class AlibabaAscpUopSupplierConsignorderOutofstockCallbackRequest
{
	/** 
	 * 缺货回告请求模型
	 **/
	private $consignorderOutofstockCallbackRequest;
	
	private $apiParas = array();
	
	public function setConsignorderOutofstockCallbackRequest($consignorderOutofstockCallbackRequest)
	{
		$this->consignorderOutofstockCallbackRequest = $consignorderOutofstockCallbackRequest;
		$this->apiParas["consignorder_outofstock_callback_request"] = $consignorderOutofstockCallbackRequest;
	}

	public function getConsignorderOutofstockCallbackRequest()
	{
		return $this->consignorderOutofstockCallbackRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.consignorder.outofstock.callback";
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
