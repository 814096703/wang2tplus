<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.stockin.order.query.yuemeng request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class WdtExtStockinOrderQueryYuemengRequest
{
	/** 
	 * app_rights
	 **/
	private $appRights;
	
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 源单据类别 1采购入库, 2调拨入库, 3退货入库, 4盘盈入库, 5生产入库, 6其他入库, 7保修入库, 8纠错入库, 9初始化入库 10 预入库 11 JIT退货入库
	 **/
	private $orderType;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 源单据编号
	 **/
	private $srcOrderNo;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 入库单状态 10已取消20编辑中25待价格确认30待审核32待推送33推送失败35委外待入库60待结算80已完成（按照状态查询时必须传原单据类别，如果未传status则默认查询80已完成单据）
	 **/
	private $status;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setAppRights($appRights)
	{
		$this->appRights = $appRights;
		$this->apiParas["app_rights"] = $appRights;
	}

	public function getAppRights()
	{
		return $this->appRights;
	}

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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setSrcOrderNo($srcOrderNo)
	{
		$this->srcOrderNo = $srcOrderNo;
		$this->apiParas["src_order_no"] = $srcOrderNo;
	}

	public function getSrcOrderNo()
	{
		return $this->srcOrderNo;
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

	public function setWarehouseNo($warehouseNo)
	{
		$this->warehouseNo = $warehouseNo;
		$this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo()
	{
		return $this->warehouseNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.ext.stockin.order.query.yuemeng";
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
