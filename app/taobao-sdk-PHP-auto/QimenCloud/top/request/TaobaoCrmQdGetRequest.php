<?php
/**
 * TOP API: qimen.taobao.crm.qd.get request
 * 
 * @author auto create
 * @since 1.0, 2018.12.28
 */
class TaobaoCrmQdGetRequest
{
	/** 
	 * 路由参数
	 **/
	private $customerid;
	
	/** 
	 * 查询内结束时间： 2000-11-3023:59:59
	 **/
	private $endModified;
	
	/** 
	 * 扩展字段
	 **/
	private $extendProps;
	
	/** 
	 * 页码: 取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 页码: 取值范围:大于零的整数; 默认值:1
	 **/
	private $pageSize;
	
	/** 
	 * 渠道代码
	 **/
	private $qddm;
	
	/** 
	 * 查询起始时间： 2011-09-01 00:00:00
	 **/
	private $startModified;
	
	private $apiParas = array();
	
	public function setCustomerid($customerid)
	{
		$this->customerid = $customerid;
		$this->apiParas["customerid"] = $customerid;
	}

	public function getCustomerid()
	{
		return $this->customerid;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["endModified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setQddm($qddm)
	{
		$this->qddm = $qddm;
		$this->apiParas["qddm"] = $qddm;
	}

	public function getQddm()
	{
		return $this->qddm;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["startModified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.crm.qd.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerid,"customerid");
		RequestCheckUtil::checkMaxLength($this->customerid,64,"customerid");
		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkMaxLength($this->endModified,64,"endModified");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxLength($this->qddm,64,"qddm");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
		RequestCheckUtil::checkMaxLength($this->startModified,64,"startModified");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}