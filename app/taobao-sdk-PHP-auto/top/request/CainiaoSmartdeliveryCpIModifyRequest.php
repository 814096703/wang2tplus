<?php
/**
 * TOP API: cainiao.smartdelivery.cp.i.modify request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoSmartdeliveryCpIModifyRequest
{
	/** 
	 * 修改智选CP请求
	 **/
	private $modifySmartDeliveryCpRequest;
	
	private $apiParas = array();
	
	public function setModifySmartDeliveryCpRequest($modifySmartDeliveryCpRequest)
	{
		$this->modifySmartDeliveryCpRequest = $modifySmartDeliveryCpRequest;
		$this->apiParas["modify_smart_delivery_cp_request"] = $modifySmartDeliveryCpRequest;
	}

	public function getModifySmartDeliveryCpRequest()
	{
		return $this->modifySmartDeliveryCpRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.cp.i.modify";
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
