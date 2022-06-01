<?php
/**
 * TOP API: taobao.omniorder.store.sdtconsign request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreSdtconsignRequest
{
	/** 
	 * 取号接口返回的包裹id
	 **/
	private $packageId;
	
	/** 
	 * 发货标签号
	 **/
	private $tagCode;
	
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

	public function setTagCode($tagCode)
	{
		$this->tagCode = $tagCode;
		$this->apiParas["tag_code"] = $tagCode;
	}

	public function getTagCode()
	{
		return $this->tagCode;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.sdtconsign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->packageId,"packageId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
