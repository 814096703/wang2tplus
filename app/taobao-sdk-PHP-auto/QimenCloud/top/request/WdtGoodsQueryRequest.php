<?php
/**
 * TOP API: hu3cgwt0tc.wdt.goods.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtGoodsQueryRequest
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
	 * 品牌编号
	 **/
	private $brandNo;
	
	/** 
	 * 类别名称
	 **/
	private $className;
	
	/** 
	 * 已删除货品，默认为0,  0：不返回    1：返回
	 **/
	private $deleted;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 货品编码
	 **/
	private $goodsNo;
	
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
	 * 商家编码
	 **/
	private $specNo;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
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

	public function setBrandNo($brandNo)
	{
		$this->brandNo = $brandNo;
		$this->apiParas["brand_no"] = $brandNo;
	}

	public function getBrandNo()
	{
		return $this->brandNo;
	}

	public function setClassName($className)
	{
		$this->className = $className;
		$this->apiParas["class_name"] = $className;
	}

	public function getClassName()
	{
		return $this->className;
	}

	public function setDeleted($deleted)
	{
		$this->deleted = $deleted;
		$this->apiParas["deleted"] = $deleted;
	}

	public function getDeleted()
	{
		return $this->deleted;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.goods.query";
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
