<?php
/**
 * TOP API: alibaba.ascp.uop.taobao.presalesorder.create request
 * 
 * @author auto create
 * @since 1.0, 2020.09.17
 */
class AlibabaAscpUopTaobaoPresalesorderCreateRequest
{
	/** 
	 * 预售商家仓接单对象
	 **/
	private $presalesOrderCreateRequest;
	
	private $apiParas = array();
	
	public function setPresalesOrderCreateRequest($presalesOrderCreateRequest)
	{
		$this->presalesOrderCreateRequest = $presalesOrderCreateRequest;
		$this->apiParas["presales_order_create_request"] = $presalesOrderCreateRequest;
	}

	public function getPresalesOrderCreateRequest()
	{
		return $this->presalesOrderCreateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.taobao.presalesorder.create";
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
