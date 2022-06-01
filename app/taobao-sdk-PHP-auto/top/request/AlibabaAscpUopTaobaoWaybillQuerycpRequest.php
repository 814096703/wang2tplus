<?php
/**
 * TOP API: alibaba.ascp.uop.taobao.waybill.querycp request
 * 
 * @author auto create
 * @since 1.0, 2020.09.28
 */
class AlibabaAscpUopTaobaoWaybillQuerycpRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $queryCpRequest;
	
	private $apiParas = array();
	
	public function setQueryCpRequest($queryCpRequest)
	{
		$this->queryCpRequest = $queryCpRequest;
		$this->apiParas["query_cp_request"] = $queryCpRequest;
	}

	public function getQueryCpRequest()
	{
		return $this->queryCpRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.taobao.waybill.querycp";
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
