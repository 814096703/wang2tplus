<?php
/**
 * TOP API: rq122772bg.wdt.pos.trade.updatestatus request
 * 
 * @author auto create
 * @since 1.0, 2020.05.09
 */
class WdtPosTradeUpdatestatusRequest
{
	/** 
	 * 配送员
	 **/
	private $distributor;
	
	/** 
	 * 配送员电话
	 **/
	private $mobile;
	
	/** 
	 * 门店编码
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 订单状态
	 **/
	private $status;
	
	/** 
	 * 门店备注（裱花间信息）
	 **/
	private $storeRemark;
	
	/** 
	 * 订单编号
	 **/
	private $tradeNo;
	
	private $apiParas = array();
	
	public function setDistributor($distributor)
	{
		$this->distributor = $distributor;
		$this->apiParas["distributor"] = $distributor;
	}

	public function getDistributor()
	{
		return $this->distributor;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStoreRemark($storeRemark)
	{
		$this->storeRemark = $storeRemark;
		$this->apiParas["store_remark"] = $storeRemark;
	}

	public function getStoreRemark()
	{
		return $this->storeRemark;
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

	public function getApiMethodName()
	{
		return "rq122772bg.wdt.pos.trade.updatestatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->tradeNo,"tradeNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
