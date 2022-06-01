<?php
/**
 * TOP API: hu3cgwt0tc.wdt.api.refund.query.by.stockout request
 * 
 * @author auto create
 * @since 1.0, 2018.01.27
 */
class WdtApiRefundQueryByStockoutRequest
{
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 出库单号
	 **/
	private $stockoutNo;
	
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStockoutNo($stockoutNo)
	{
		$this->stockoutNo = $stockoutNo;
		$this->apiParas["stockout_no"] = $stockoutNo;
	}

	public function getStockoutNo()
	{
		return $this->stockoutNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.api.refund.query.by.stockout";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->stockoutNo,"stockoutNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
