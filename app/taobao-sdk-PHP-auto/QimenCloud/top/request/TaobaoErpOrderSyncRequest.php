<?php
/**
 * TOP API: qimen.taobao.erp.order.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.03.28
 */
class TaobaoErpOrderSyncRequest
{
	/** 
	 * 指定路由参数
	 **/
	private $customerId;
	
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
	 * 店铺名称
	 **/
	private $shopName;
	
	/** 
	 * 最后修改的起始时间
	 **/
	private $startDate;
	
	/** 
	 * 交易类型(0被取消;1等待单;2待审核;3预订单;4待结算;5打单出库;6生产等待;7待发货;8发货在途;9代销发货;10委外发货;11已完成)
	 **/
	private $timeType;
	
	/** 
	 * 查询类型(0查询未归档订单;1查询归档订单)
	 **/
	private $tradeArc;
	
	/** 
	 * 订单类型(0被取消;1等待单;2待审核;3预订单;4待结算;5打单出库;6生产等待;7待发货;8发货在途;9代销发货;10委外发货;11已完成)
	 **/
	private $tradeStatus;
	
	private $apiParas = array();
	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
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

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
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

	public function setTradeArc($tradeArc)
	{
		$this->tradeArc = $tradeArc;
		$this->apiParas["trade_arc"] = $tradeArc;
	}

	public function getTradeArc()
	{
		return $this->tradeArc;
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
		return "qimen.taobao.erp.order.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerId,"customerId");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
