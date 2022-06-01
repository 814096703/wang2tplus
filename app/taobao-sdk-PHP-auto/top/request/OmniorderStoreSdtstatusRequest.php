<?php
/**
 * TOP API: taobao.omniorder.store.sdtstatus request
 * 
 * @author auto create
 * @since 1.0, 2019.12.16
 */
class OmniorderStoreSdtstatusRequest
{
	/** 
	 * 菜鸟裹裹的包裹ID
	 **/
	private $packageId;
	
	private $apiParas = array();
	
	public function setPackageId($packageId)
	{
		$this->packageId = $packageId;
		$this->apiParas["package_id"] = $packageId;
	}

	public function getPackageId()
	{
		return $this->packageId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.sdtstatus";
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
