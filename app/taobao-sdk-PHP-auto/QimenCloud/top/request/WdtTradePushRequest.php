<?php
/**
 * TOP API: hu3cgwt0tc.wdt.trade.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtTradePushRequest
{
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 订单数据
	 **/
	private $tradeList;
	
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

	public function setTradeList($tradeList)
	{
		$this->tradeList = $tradeList;
		$this->apiParas["trade_list"] = $tradeList;
	}

	public function getTradeList()
	{
		return $this->tradeList;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.trade.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
