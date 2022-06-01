<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.stockout.sales.weight.push request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtVipStockoutSalesWeightPushRequest
{
	/** 
	 * 校验重量是否超限
	 **/
	private $isSetting;
	
	/** 
	 * 物流单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 打包员编号
	 **/
	private $packagerNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 重量
	 **/
	private $weight;
	
	private $apiParas = array();
	
	public function setIsSetting($isSetting)
	{
		$this->isSetting = $isSetting;
		$this->apiParas["is_setting"] = $isSetting;
	}

	public function getIsSetting()
	{
		return $this->isSetting;
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

	public function setPackagerNo($packagerNo)
	{
		$this->packagerNo = $packagerNo;
		$this->apiParas["packager_no"] = $packagerNo;
	}

	public function getPackagerNo()
	{
		return $this->packagerNo;
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

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.vip.stockout.sales.weight.push";
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
