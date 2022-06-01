<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.in.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class WdtStockInQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 不查询某类订单类型  1,采购入库2,调拨入库3,退货入库4, 盘盈入库 5,生产入库6,其他入库7,保修入库 8,纠错入库 9,初始化入库 10,预入库 11,JIT退货入库 12,委外入库
	 **/
	private $exceptType;
	
	/** 
	 * 源单据类别 1,采购入库2,调拨入库3,退货入库4, 盘盈入库 5,生产入库6,其他入库7,保修入库 8,纠错入库 9,初始化入库 10,预入库 11,JIT退货入库 12,委外入库
	 **/
	private $orderType;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小（最大不超过30条，默认返回30条）
	 **/
	private $pageSize;
	
	/** 
	 * 时间方式，0按默认时间(最后修改时间)，1按入库时间
	 **/
	private $searchType;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 入库单状态（10已取消20编辑中30待审核32待推送推送失败35委外待入库40待关联50待价格确认60待结算70暂估结算80已完成）默认返回入库状态为80的订单
	 **/
	private $status;
	
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

	public function setExceptType($exceptType)
	{
		$this->exceptType = $exceptType;
		$this->apiParas["except_type"] = $exceptType;
	}

	public function getExceptType()
	{
		return $this->exceptType;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stock.in.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
