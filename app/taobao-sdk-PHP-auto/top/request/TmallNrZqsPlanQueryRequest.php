<?php
/**
 * TOP API: tmall.nr.zqs.plan.query request
 * 
 * @author auto create
 * @since 1.0, 2018.11.06
 */
class TmallNrZqsPlanQueryRequest
{
	/** 
	 * 交易子订单id
	 **/
	private $detailOrderId;
	
	private $apiParas = array();
	
	public function setDetailOrderId($detailOrderId)
	{
		$this->detailOrderId = $detailOrderId;
		$this->apiParas["detail_order_id"] = $detailOrderId;
	}

	public function getDetailOrderId()
	{
		return $this->detailOrderId;
	}

	public function getApiMethodName()
	{
		return "tmall.nr.zqs.plan.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->detailOrderId,"detailOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
