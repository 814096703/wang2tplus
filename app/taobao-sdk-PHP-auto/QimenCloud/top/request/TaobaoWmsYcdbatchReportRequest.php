<?php
/**
 * TOP API: qimen.taobao.wms.ycdbatch.report request
 * 
 * @author auto create
 * @since 1.0, 2018.05.11
 */
class TaobaoWmsYcdbatchReportRequest
{
	/** 
	 * 请求
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
		return "qimen.taobao.wms.ycdbatch.report";
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
