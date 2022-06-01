<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.transfer.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtStockTransferQueryRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 最后修改时间
	 **/
	private $endTime;
	
	/** 
	 * 源仓库
	 **/
	private $fromWarehouseNo;
	
	/** 
	 * 页码，从0页开始，默认值0。page_no=0时，返回total_count
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回条数，默认30条，不超过30
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 最后修改时间
	 **/
	private $startTime;
	
	/** 
	 * 调拨单状态10已取消20编辑中30待审核40已审核50部分出库60全部出库70部分入库80待结算90调拨完成
	 **/
	private $status;
	
	/** 
	 * 目标仓库
	 **/
	private $toWarehouseNo;
	
	/** 
	 * 调拨单编号
	 **/
	private $transferNo;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFromWarehouseNo($fromWarehouseNo)
	{
		$this->fromWarehouseNo = $fromWarehouseNo;
		$this->apiParas["from_warehouse_no"] = $fromWarehouseNo;
	}

	public function getFromWarehouseNo()
	{
		return $this->fromWarehouseNo;
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

	public function setToWarehouseNo($toWarehouseNo)
	{
		$this->toWarehouseNo = $toWarehouseNo;
		$this->apiParas["to_warehouse_no"] = $toWarehouseNo;
	}

	public function getToWarehouseNo()
	{
		return $this->toWarehouseNo;
	}

	public function setTransferNo($transferNo)
	{
		$this->transferNo = $transferNo;
		$this->apiParas["transfer_no"] = $transferNo;
	}

	public function getTransferNo()
	{
		return $this->transferNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stock.transfer.query";
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
