<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.consignorder.ship request
 * 
 * @author auto create
 * @since 1.0, 2020.10.09
 */
class AlibabaAscpUopSupplierConsignorderShipRequest
{
	/** 
	 * 发货回传请求模型
	 **/
	private $consignorderShipRequest;
	
	private $apiParas = array();
	
	public function setConsignorderShipRequest($consignorderShipRequest)
	{
		$this->consignorderShipRequest = $consignorderShipRequest;
		$this->apiParas["consignorder_ship_request"] = $consignorderShipRequest;
	}

	public function getConsignorderShipRequest()
	{
		return $this->consignorderShipRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.consignorder.ship";
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
