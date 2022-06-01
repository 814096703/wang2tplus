<?php
/**
 * TOP API: taobao.omniorder.dtd.consume request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderDtdConsumeRequest
{
	/** 
	 * 核销信息
	 **/
	private $paramDoor2doorConsumeRequest;
	
	private $apiParas = array();
	
	public function setParamDoor2doorConsumeRequest($paramDoor2doorConsumeRequest)
	{
		$this->paramDoor2doorConsumeRequest = $paramDoor2doorConsumeRequest;
		$this->apiParas["param_door2door_consume_request"] = $paramDoor2doorConsumeRequest;
	}

	public function getParamDoor2doorConsumeRequest()
	{
		return $this->paramDoor2doorConsumeRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.dtd.consume";
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
