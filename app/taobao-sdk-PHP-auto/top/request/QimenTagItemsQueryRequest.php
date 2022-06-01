<?php
/**
 * TOP API: taobao.qimen.tag.items.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class QimenTagItemsQueryRequest
{
	/** 
	 * 备注，string（500）
	 **/
	private $remark;
	
	/** 
	 * 打标值，string（50），TBKU=同步库存标，MDZT=门店自提标，必填
	 **/
	private $tagType;
	
	private $apiParas = array();
	
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
		return "taobao.qimen.tag.items.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagType,"tagType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
