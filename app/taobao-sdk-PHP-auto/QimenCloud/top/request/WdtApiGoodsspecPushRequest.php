<?php
/**
 * TOP API: hu3cgwt0tc.wdt.api.goodsspec.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class WdtApiGoodsspecPushRequest
{
	/** 
	 * 平台货品信息
	 **/
	private $apiGoodsInfo;
	
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setApiGoodsInfo($apiGoodsInfo)
	{
		$this->apiGoodsInfo = $apiGoodsInfo;
		$this->apiParas["api_goods_info"] = $apiGoodsInfo;
	}

	public function getApiGoodsInfo()
	{
		return $this->apiGoodsInfo;
	}

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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.api.goodsspec.push";
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
