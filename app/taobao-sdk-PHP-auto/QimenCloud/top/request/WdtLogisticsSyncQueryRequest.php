<?php
/**
 * TOP API: hu3cgwt0tc.wdt.logistics.sync.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtLogisticsSyncQueryRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 是否支持拆单发货 0 否 1 是（支持开启多物流单号回传的卖家，没有对应需求的卖家请不要传该字段）
	 **/
	private $isPartSyncAble;
	
	/** 
	 * 最多返回条数
	 **/
	private $limit;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
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

	public function setIsPartSyncAble($isPartSyncAble)
	{
		$this->isPartSyncAble = $isPartSyncAble;
		$this->apiParas["is_part_sync_able"] = $isPartSyncAble;
	}

	public function getIsPartSyncAble()
	{
		return $this->isPartSyncAble;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.logistics.sync.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
