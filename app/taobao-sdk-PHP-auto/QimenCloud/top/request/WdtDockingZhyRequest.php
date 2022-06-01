<?php
/**
 * TOP API: 70ic0i07v3.wdt.docking.zhy request
 * 
 * @author auto create
 * @since 1.0, 2020.04.02
 */
class WdtDockingZhyRequest
{
	/** 
	 * 接口名字
	 **/
	private $interfaceName;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 页码
	 **/
	private $pageSize;
	
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "70ic0i07v3.wdt.docking.zhy";
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
