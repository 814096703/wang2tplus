<?php
/**
 * TOP API: qimen.taobao.erp.return.oder.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.06.08
 */
class TaobaoErpReturnOderSyncRequest
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
	 * 退换ID
	 **/
	private $id;
	
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
	 * 退换单状态(0待收货;1待结算;2被取消;3已完成;4待审核
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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
		return "qimen.taobao.erp.return.oder.sync";
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
