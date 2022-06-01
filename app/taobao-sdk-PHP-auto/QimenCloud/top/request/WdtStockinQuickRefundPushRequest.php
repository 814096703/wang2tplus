<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockin.quick.refund.push request
 * 
 * @author auto create
 * @since 1.0, 2020.06.30
 */
class WdtStockinQuickRefundPushRequest
{
	/** 
	 * 退货单信息
	 **/
	private $refundList;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setRefundList($refundList)
	{
		$this->refundList = $refundList;
		$this->apiParas["refund_list"] = $refundList;
	}

	public function getRefundList()
	{
		return $this->refundList;
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
		return "hu3cgwt0tc.wdt.stockin.quick.refund.push";
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
