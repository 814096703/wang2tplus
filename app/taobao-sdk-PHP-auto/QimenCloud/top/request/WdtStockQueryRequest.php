<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.13
 */
class WdtStockQueryRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 条码
	 **/
	private $barcode;
	
	/** 
	 * 结束时间（最后更新时间）
	 **/
	private $endTime;
	
	/** 
	 * 货品编号
	 **/
	private $goodsNo;
	
	/** 
	 * 页号,从0页开始,默认为0
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小,默认40,最大100
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 货品的商家编码(不指定则返回所有商品)
	 **/
	private $specNo;
	
	/** 
	 * 开始时间（最后更新时间）
	 **/
	private $startTime;
	
	/** 
	 * 仓库编号(不指定则返回所有仓库)
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

	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
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

	public function setGoodsNo($goodsNo)
	{
		$this->goodsNo = $goodsNo;
		$this->apiParas["goods_no"] = $goodsNo;
	}

	public function getGoodsNo()
	{
		return $this->goodsNo;
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

	public function setSpecNo($specNo)
	{
		$this->specNo = $specNo;
		$this->apiParas["spec_no"] = $specNo;
	}

	public function getSpecNo()
	{
		return $this->specNo;
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
		return "hu3cgwt0tc.wdt.stock.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
