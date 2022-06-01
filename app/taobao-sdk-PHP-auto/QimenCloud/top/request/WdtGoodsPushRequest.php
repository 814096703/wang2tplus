<?php
/**
 * TOP API: hu3cgwt0tc.wdt.goods.push request
 * 
 * @author auto create
 * @since 1.0, 2020.05.28
 */
class WdtGoodsPushRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 货品信息
	 **/
	private $goodsList;
	
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

	public function setGoodsList($goodsList)
	{
		$this->goodsList = $goodsList;
		$this->apiParas["goods_list"] = $goodsList;
	}

	public function getGoodsList()
	{
		return $this->goodsList;
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
		return "hu3cgwt0tc.wdt.goods.push";
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
