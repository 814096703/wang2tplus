<?php
/**
 * TOP API: alibaba.ascp.industry.icp.query.lbx request
 * 
 * @author auto create
 * @since 1.0, 2020.05.26
 */
class AlibabaAscpIndustryIcpQueryLbxRequest
{
	/** 
	 * icps订单号
	 **/
	private $icpOrderCode;
	
	private $apiParas = array();
	
	public function setIcpOrderCode($icpOrderCode)
	{
		$this->icpOrderCode = $icpOrderCode;
		$this->apiParas["icp_order_code"] = $icpOrderCode;
	}

	public function getIcpOrderCode()
	{
		return $this->icpOrderCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.icp.query.lbx";
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
