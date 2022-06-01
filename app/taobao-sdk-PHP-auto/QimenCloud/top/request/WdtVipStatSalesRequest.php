<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.stat.sales request
 * 
 * @author auto create
 * @since 1.0, 2020.10.13
 */
class WdtVipStatSalesRequest
{
	/** 
	 * 5
	 **/
	private $appRights;
	
	/** 
	 * 2
	 **/
	private $consignDate;
	
	/** 
	 * 4
	 **/
	private $shopNo;
	
	/** 
	 * 1
	 **/
	private $sid;
	
	/** 
	 * 3
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

	public function setConsignDate($consignDate)
	{
		$this->consignDate = $consignDate;
		$this->apiParas["consign_date"] = $consignDate;
	}

	public function getConsignDate()
	{
		return $this->consignDate;
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
		return "hu3cgwt0tc.wdt.vip.stat.sales";
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
