<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stat.sales.by.spec.shop.warehouse.query request
 * 
 * @author auto create
 * @since 1.0, 2020.09.01
 */
class WdtStatSalesBySpecShopWarehouseQueryRequest
{
	/** 
	 * 发货日期
	 **/
	private $consignDate;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setConsignDate($consignDate)
	{
		$this->consignDate = $consignDate;
		$this->apiParas["consign_date"] = $consignDate;
	}

	public function getConsignDate()
	{
		return $this->consignDate;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stat.sales.by.spec.shop.warehouse.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consignDate,"consignDate");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
