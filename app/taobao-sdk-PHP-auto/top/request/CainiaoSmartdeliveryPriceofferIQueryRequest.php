<?php
/**
 * TOP API: cainiao.smartdelivery.priceoffer.i.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryPriceofferIQueryRequest
{
	/** 
	 * 请求参数
	 **/
	private $queryCpPriceInfoRequest;
	
	private $apiParas = array();
	
	public function setQueryCpPriceInfoRequest($queryCpPriceInfoRequest)
	{
		$this->queryCpPriceInfoRequest = $queryCpPriceInfoRequest;
		$this->apiParas["query_cp_price_info_request"] = $queryCpPriceInfoRequest;
	}

	public function getQueryCpPriceInfoRequest()
	{
		return $this->queryCpPriceInfoRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.priceoffer.i.query";
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
