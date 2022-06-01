<?php
/**
 * TOP API: taobao.omniorder.store.sdtquerystation request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreSdtquerystationRequest
{
	/** 
	 * 取号时返回的packageId
	 **/
	private $paramLong2;
	
	private $apiParas = array();
	
	public function setParamLong2($paramLong2)
	{
		$this->paramLong2 = $paramLong2;
		$this->apiParas["param_long2"] = $paramLong2;
	}

	public function getParamLong2()
	{
		return $this->paramLong2;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.sdtquerystation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramLong2,"paramLong2");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
