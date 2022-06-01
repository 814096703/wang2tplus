<?php
/**
 * TOP API: hu3cgwt0tc.wdt.eptison.fa.alipay.account.check.query request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtEptisonFaAlipayAccountCheckQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页面大小
	 **/
	private $pageNo;
	
	/** 
	 * 页码
	 **/
	private $pageSize;
	
	/** 
	 * 平台id，默认0
	 **/
	private $platformId;
	
	/** 
	 * 搜索类型，0 check_time, 1 consign_time,2 confirm_time
	 **/
	private $searchType;
	
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 对账状态，0未对账，1 对账失败，2部分对账  3对账成功  4设置对账成功  5未关联
	 **/
	private $status;
	
	/** 
	 * 原始单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
		$this->apiParas["platform_id"] = $platformId;
	}

	public function getPlatformId()
	{
		return $this->platformId;
	}

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.eptison.fa.alipay.account.check.query";
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
