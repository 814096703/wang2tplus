<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stat.refund.by.spec.shop.warehouse.query request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtStatRefundBySpecShopWarehouseQueryRequest
{
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 退货入库日期
	 **/
	private $stockinDate;
	
	private $apiParas = array();
	
	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStockinDate($stockinDate)
	{
		$this->stockinDate = $stockinDate;
		$this->apiParas["stockin_date"] = $stockinDate;
	}

	public function getStockinDate()
	{
		return $this->stockinDate;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stat.refund.by.spec.shop.warehouse.query";
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
