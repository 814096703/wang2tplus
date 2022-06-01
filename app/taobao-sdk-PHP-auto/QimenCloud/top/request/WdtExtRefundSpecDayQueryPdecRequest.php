<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.refund.spec.day.query.pdec request
 * 
 * @author auto create
 * @since 1.0, 2020.07.17
 */
class WdtExtRefundSpecDayQueryPdecRequest
{
	/** 
	 * 退货入库审核时间
	 **/
	private $refundDate;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setRefundDate($refundDate)
	{
		$this->refundDate = $refundDate;
		$this->apiParas["refund_date"] = $refundDate;
	}

	public function getRefundDate()
	{
		return $this->refundDate;
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
		return "hu3cgwt0tc.wdt.ext.refund.spec.day.query.pdec";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundDate,"refundDate");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
