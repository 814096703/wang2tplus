<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockin.refund.push request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtStockinRefundPushRequest
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
	 * 退货入库单数据
	 **/
	private $stockinRefundInfo;
	
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

	public function setStockinRefundInfo($stockinRefundInfo)
	{
		$this->stockinRefundInfo = $stockinRefundInfo;
		$this->apiParas["stockin_refund_info"] = $stockinRefundInfo;
	}

	public function getStockinRefundInfo()
	{
		return $this->stockinRefundInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockin.refund.push";
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
