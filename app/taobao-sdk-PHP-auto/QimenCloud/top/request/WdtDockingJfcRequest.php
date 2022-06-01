<?php
/**
 * TOP API: 70ic0i07v3.wdt.docking.jfc request
 * 
 * @author auto create
 * @since 1.0, 2020.04.02
 */
class WdtDockingJfcRequest
{
	/** 
	 * 接口名称
	 **/
	private $interfaceName;
	
	/** 
	 * 业务参数
	 **/
	private $params;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setInterfaceName($interfaceName)
	{
		$this->interfaceName = $interfaceName;
		$this->apiParas["interface_name"] = $interfaceName;
	}

	public function getInterfaceName()
	{
		return $this->interfaceName;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "70ic0i07v3.wdt.docking.jfc";
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
