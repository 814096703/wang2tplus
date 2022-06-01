<?php
/**
 * TOP API: qimen.taobao.erp.purchase.oder.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.04.11
 */
class TaobaoErpPurchaseOderSyncRequest
{
	/** 
	 * 采购单ID
	 **/
	private $orderID;
	
	/** 
	 * 采购单号
	 **/
	private $orderNO;
	
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
	
	/** 
	 * 查询时间类型（0:登记时间 1:审核时间(默认登记时间）
	 **/
	private $timeType;
	
	/** 
	 * 采购单状态(0待审核;1执行中;2被取消;3已完成;4被终止)
	 **/
	private $tradeStatus;
	
	private $apiParas = array();
	
	public function setOrderID($orderID)
	{
		$this->orderID = $orderID;
		$this->apiParas["OrderID"] = $orderID;
	}

	public function getOrderID()
	{
		return $this->orderID;
	}

	public function setOrderNO($orderNO)
	{
		$this->orderNO = $orderNO;
		$this->apiParas["OrderNO"] = $orderNO;
	}

	public function getOrderNO()
	{
		return $this->orderNO;
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

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function setTradeStatus($tradeStatus)
	{
		$this->tradeStatus = $tradeStatus;
		$this->apiParas["trade_status"] = $tradeStatus;
	}

	public function getTradeStatus()
	{
		return $this->tradeStatus;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.purchase.oder.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
