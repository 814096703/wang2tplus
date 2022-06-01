<?php
/**
 * TOP API: qimen.alibaba.ascp.uop.modify.trade.appointment request
 * 
 * @author auto create
 * @since 1.0, 2019.08.06
 */
class AlibabaAscpUopModifyTradeAppointmentRequest
{
	/** 
	 * 请求内容根节点
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "qimen.alibaba.ascp.uop.modify.trade.appointment";
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
