<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.goods.sn.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.12
 */
class WdtStockGoodsSnQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 货品编码
	 **/
	private $goodsNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 序列号
	 **/
	private $sn;
	
	/** 
	 * 商家编码
	 **/
	private $specNo;
	
	/** 
	 * 出入库源单据编号
	 **/
	private $srcOrderNo;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 序列号状态
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

	public function setGoodsNo($goodsNo)
	{
		$this->goodsNo = $goodsNo;
		$this->apiParas["goods_no"] = $goodsNo;
	}

	public function getGoodsNo()
	{
		return $this->goodsNo;
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

	public function setSn($sn)
	{
		$this->sn = $sn;
		$this->apiParas["sn"] = $sn;
	}

	public function getSn()
	{
		return $this->sn;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stock.goods.sn.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
