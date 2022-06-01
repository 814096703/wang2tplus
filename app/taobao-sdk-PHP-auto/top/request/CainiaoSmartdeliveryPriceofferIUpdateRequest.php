<?php
/**
 * TOP API: cainiao.smartdelivery.priceoffer.i.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryPriceofferIUpdateRequest
{
	/** 
	 * 物流公司价格信息
	 **/
	private $cpPriceInfo;
	
	private $apiParas = array();
	
	public function setCpPriceInfo($cpPriceInfo)
	{
		$this->cpPriceInfo = $cpPriceInfo;
		$this->apiParas["cp_price_info"] = $cpPriceInfo;
	}

	public function getCpPriceInfo()
	{
		return $this->cpPriceInfo;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.priceoffer.i.update";
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
