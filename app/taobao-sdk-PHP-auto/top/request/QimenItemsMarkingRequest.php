<?php
/**
 * TOP API: taobao.qimen.items.marking request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class QimenItemsMarkingRequest
{
	/** 
	 * 操作类型，string（50），ADD=打标，DELETE=去标，必填
	 **/
	private $actionType;
	
	/** 
	 * 线上商品ID，long，必填
	 **/
	private $itemIds;
	
	/** 
	 * 备注，string（500）
	 **/
	private $remark;
	
	/** 
	 * 打标值，string（50），TBKU=同步库存标，MDZT=门店自提标，必填
	 **/
	private $tagType;
	
	private $apiParas = array();
	
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["action_type"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setTagType($tagType)
	{
		$this->tagType = $tagType;
		$this->apiParas["tag_type"] = $tagType;
	}

	public function getTagType()
	{
		return $this->tagType;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.items.marking";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionType,"actionType");
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
		RequestCheckUtil::checkNotNull($this->tagType,"tagType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
