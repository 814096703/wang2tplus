<?php
/**
 * TOP API: hu3cgwt0tc.wdt.api.goods.stock.change.ack request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtApiGoodsStockChangeAckRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 待同步库存信息
	 **/
	private $stockSyncList;
	
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

	public function setStockSyncList($stockSyncList)
	{
		$this->stockSyncList = $stockSyncList;
		$this->apiParas["stock_sync_list"] = $stockSyncList;
	}

	public function getStockSyncList()
	{
		return $this->stockSyncList;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.api.goods.stock.change.ack";
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
