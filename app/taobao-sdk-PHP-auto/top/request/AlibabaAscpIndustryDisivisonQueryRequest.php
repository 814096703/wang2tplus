<?php
/**
 * TOP API: alibaba.ascp.industry.disivison.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.25
 */
class AlibabaAscpIndustryDisivisonQueryRequest
{
	/** 
	 * 服务编码
	 **/
	private $serviceCode;
	
	private $apiParas = array();
	
	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.disivison.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
