<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.provider.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class WdtPurchaseProviderQueryRequest
{
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 需要返回的字段（"provider_id","provider_no","provider_name","contact","telno","mobile","fax","zip","email","qq","wangwang","address","website","remark","is_disabled","deleted","modified","created"）
	 **/
	private $column;
	
	/** 
	 * 是否删除
	 **/
	private $isDeleted;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 供应商名称
	 **/
	private $providerName;
	
	/** 
	 * 供应商编号
	 **/
	private $providerNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setColumn($column)
	{
		$this->column = $column;
		$this->apiParas["column"] = $column;
	}

	public function getColumn()
	{
		return $this->column;
	}

	public function setIsDeleted($isDeleted)
	{
		$this->isDeleted = $isDeleted;
		$this->apiParas["is_deleted"] = $isDeleted;
	}

	public function getIsDeleted()
	{
		return $this->isDeleted;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setProviderName($providerName)
	{
		$this->providerName = $providerName;
		$this->apiParas["provider_name"] = $providerName;
	}

	public function getProviderName()
	{
		return $this->providerName;
	}

	public function setProviderNo($providerNo)
	{
		$this->providerNo = $providerNo;
		$this->apiParas["provider_no"] = $providerNo;
	}

	public function getProviderNo()
	{
		return $this->providerNo;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.provider.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
