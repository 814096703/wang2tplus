<?php
/**
 * TOP API: qimen.taobao.erp.basedata.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.04.11
 */
class TaobaoErpBasedataSyncRequest
{
	/** 
	 * 基础数据代码（多个基础数据 分号“;” 分开）
	 **/
	private $basedataID;
	
	/** 
	 * 基础数据类别（1-仓库;2-库区;3-库位;4-计量单位;5-币别;6-产品分类;7-组织;8-员工）
	 **/
	private $basedataType;
	
	/** 
	 * 最后修改的起始时间
	 **/
	private $endDate;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 每页条数(不超过100)
	 **/
	private $pageSize;
	
	/** 
	 * 当前页从1开始
	 **/
	private $pageNo;
	
	/** 
	 * 最后修改的起始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setBasedataID($basedataID)
	{
		$this->basedataID = $basedataID;
		$this->apiParas["basedataID"] = $basedataID;
	}

	public function getBasedataID()
	{
		return $this->basedataID;
	}

	public function setBasedataType($basedataType)
	{
		$this->basedataType = $basedataType;
		$this->apiParas["basedataType"] = $basedataType;
	}

	public function getBasedataType()
	{
		return $this->basedataType;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["startDate"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.basedata.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->basedataType,"basedataType");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
