<?php
/**
 * TOP API: taobao.rdc.aligenius.logistics.packages.notice request
 * 
 * @author auto create
 * @since 1.0, 2020.03.31
 */
class RdcAligeniusLogisticsPackagesNoticeRequest
{
	/** 
	 * 请求入参
	 **/
	private $paramLogisticsNoticeDTO;
	
	private $apiParas = array();
	
	public function setParamLogisticsNoticeDTO($paramLogisticsNoticeDTO)
	{
		$this->paramLogisticsNoticeDTO = $paramLogisticsNoticeDTO;
		$this->apiParas["param_logistics_notice_d_t_o"] = $paramLogisticsNoticeDTO;
	}

	public function getParamLogisticsNoticeDTO()
	{
		return $this->paramLogisticsNoticeDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.aligenius.logistics.packages.notice";
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
