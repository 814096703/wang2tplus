<?php
/**
 * TOP API: taobao.rdc.aligenius.warehouse.resend.logistics.msg.post request
 * 
 * @author auto create
 * @since 1.0, 2018.09.21
 */
class RdcAligeniusWarehouseResendLogisticsMsgPostRequest
{
	/** 
	 * 参数
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.aligenius.warehouse.resend.logistics.msg.post";
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
