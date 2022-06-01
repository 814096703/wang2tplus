<?php
/**
 * TOP API: alibaba.ascp.industry.logistics.sync request
 * 
 * @author auto create
 * @since 1.0, 2020.09.02
 */
class AlibabaAscpIndustryLogisticsSyncRequest
{
	/** 
	 * 参数
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.logistics.sync";
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
