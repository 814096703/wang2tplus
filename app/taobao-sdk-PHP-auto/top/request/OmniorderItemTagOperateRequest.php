<?php
/**
 * TOP API: taobao.omniorder.item.tag.operate request
 * 
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class OmniorderItemTagOperateRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 分单&接单设置
	 **/
	private $omniSetting;
	
	/** 
	 * 操作状态， 填 1 代表打标，填 -1 代表去标
	 **/
	private $status;
	
	/** 
	 * 商品标,storeDeliver代表门店发货, AllocateByFront代表前置拆单, storeCollect代表门店自提
	 **/
	private $types;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOmniSetting($omniSetting)
	{
		$this->omniSetting = $omniSetting;
		$this->apiParas["omni_setting"] = $omniSetting;
	}

	public function getOmniSetting()
	{
		return $this->omniSetting;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTypes($types)
	{
		$this->types = $types;
		$this->apiParas["types"] = $types;
	}

	public function getTypes()
	{
		return $this->types;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.item.tag.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->types,"types");
		RequestCheckUtil::checkMaxListSize($this->types,20,"types");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
