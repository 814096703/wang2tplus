<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.out.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class WdtStockOutQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 不查询某类订单类型  1销售订单2,调拨出库3,采购退货出库4,盘亏出库5, 生产出库6现款销售出库7,其他出库8,多发出库 9,纠错出库 10,保修配件出库 11,初始化出库 12,JIT拣货出库 13,委外出库
	 **/
	private $exceptType;
	
	/** 
	 * 源单据类别 1销售订单2,调拨出库3,采购退货出库4,盘亏出库5, 生产出库6现款销售出库7,其他出库8,多发出库 9,纠错出库 10,保修配件出库 11,初始化出库 12,JIT拣货出库 13,委外出库
	 **/
	private $orderType;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 查询时间方式,0 按默认时间(最后修改时间)，1按出库时间
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
	 * 出库单状态（5已取消 10待付款 12待尾款 13待选仓 15等未付16延时审核   19预订单前处理 20前处理(赠品，合并，拆分)21委外前处理22抢单前处理 25预订单 27待抢单 30待客审 35待财审 40待递交仓库   45递交仓库中 50已递交仓库 53未确认 55已确认 95已发货   100已签收 105部分打款 110已完成）默认返回状态大于等于95的订单
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
		return "hu3cgwt0tc.wdt.stock.out.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->searchType,"searchType");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
