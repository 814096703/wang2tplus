<?php
/**
 * TOP API: hu3cgwt0tc.wdt.his.trade.query request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtHisTradeQueryRequest
{
	/** 
	 * 卖家appkey
	 **/
	private $appkey;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 使用税率
	 **/
	private $goodstax;
	
	/** 
	 * 物流单号限制
	 **/
	private $hasLogisticsNo;
	
	/** 
	 * 货品信息是否返回图片
	 **/
	private $imgUrl;
	
	/** 
	 * 物流单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 是否返回交易流水号
	 **/
	private $src;
	
	/** 
	 * 原始单号
	 **/
	private $srcTid;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 订单编号
	 **/
	private $tradeNo;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
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

	public function setGoodstax($goodstax)
	{
		$this->goodstax = $goodstax;
		$this->apiParas["goodstax"] = $goodstax;
	}

	public function getGoodstax()
	{
		return $this->goodstax;
	}

	public function setHasLogisticsNo($hasLogisticsNo)
	{
		$this->hasLogisticsNo = $hasLogisticsNo;
		$this->apiParas["has_logistics_no"] = $hasLogisticsNo;
	}

	public function getHasLogisticsNo()
	{
		return $this->hasLogisticsNo;
	}

	public function setImgUrl($imgUrl)
	{
		$this->imgUrl = $imgUrl;
		$this->apiParas["img_url"] = $imgUrl;
	}

	public function getImgUrl()
	{
		return $this->imgUrl;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
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

	public function setShopNo($shopNo)
	{
		$this->shopNo = $shopNo;
		$this->apiParas["shop_no"] = $shopNo;
	}

	public function getShopNo()
	{
		return $this->shopNo;
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

	public function setSrc($src)
	{
		$this->src = $src;
		$this->apiParas["src"] = $src;
	}

	public function getSrc()
	{
		return $this->src;
	}

	public function setSrcTid($srcTid)
	{
		$this->srcTid = $srcTid;
		$this->apiParas["src_tid"] = $srcTid;
	}

	public function getSrcTid()
	{
		return $this->srcTid;
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

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo()
	{
		return $this->tradeNo;
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
		return "hu3cgwt0tc.wdt.his.trade.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
