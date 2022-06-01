<?php
/**
 * TOP API: rq122772bg.wdt.pos.trade.deliverysync request
 * 
 * @author auto create
 * @since 1.0, 2020.05.09
 */
class WdtPosTradeDeliverysyncRequest
{
	/** 
	 * 自提码（logistics_type=2时，该字段必填）
	 **/
	private $code;
	
	/** 
	 * 配送员（仅自送类型）
	 **/
	private $distributor;
	
	/** 
	 * 物流公司编码（logistics_code=2时，该字段必传）
	 **/
	private $logisticsCode;
	
	/** 
	 * 物流单号（logistics_code=2时，该字段必传）
	 **/
	private $logisticsNo;
	
	/** 
	 * 发货方式：1门店自送 2门店自提 3发快递
	 **/
	private $logisticsType;
	
	/** 
	 * 配送员电话（仅自送类型）
	 **/
	private $mobile;
	
	/** 
	 * 子订单号，多个以”,”分割
	 **/
	private $oids;
	
	/** 
	 * 门店编码
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 门店备注
	 **/
	private $storeRemark;
	
	/** 
	 * 订单编号
	 **/
	private $tradeNo;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setDistributor($distributor)
	{
		$this->distributor = $distributor;
		$this->apiParas["distributor"] = $distributor;
	}

	public function getDistributor()
	{
		return $this->distributor;
	}

	public function setLogisticsCode($logisticsCode)
	{
		$this->logisticsCode = $logisticsCode;
		$this->apiParas["logistics_code"] = $logisticsCode;
	}

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
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

	public function setLogisticsType($logisticsType)
	{
		$this->logisticsType = $logisticsType;
		$this->apiParas["logistics_type"] = $logisticsType;
	}

	public function getLogisticsType()
	{
		return $this->logisticsType;
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

	public function setOids($oids)
	{
		$this->oids = $oids;
		$this->apiParas["oids"] = $oids;
	}

	public function getOids()
	{
		return $this->oids;
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
		return "rq122772bg.wdt.pos.trade.deliverysync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
		RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->tradeNo,"tradeNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
