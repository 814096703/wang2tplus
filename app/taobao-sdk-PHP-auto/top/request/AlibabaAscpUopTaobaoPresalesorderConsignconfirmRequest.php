<?php
/**
 * TOP API: alibaba.ascp.uop.taobao.presalesorder.consignconfirm request
 * 
 * @author auto create
 * @since 1.0, 2020.09.17
 */
class AlibabaAscpUopTaobaoPresalesorderConsignconfirmRequest
{
	/** 
	 * 预售订单商家仓出库对象
	 **/
	private $presalesOrderConsignConfirmRequest;
	
	private $apiParas = array();
	
	public function setPresalesOrderConsignConfirmRequest($presalesOrderConsignConfirmRequest)
	{
		$this->presalesOrderConsignConfirmRequest = $presalesOrderConsignConfirmRequest;
		$this->apiParas["presales_order_consign_confirm_request"] = $presalesOrderConsignConfirmRequest;
	}

	public function getPresalesOrderConsignConfirmRequest()
	{
		return $this->presalesOrderConsignConfirmRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.taobao.presalesorder.consignconfirm";
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
