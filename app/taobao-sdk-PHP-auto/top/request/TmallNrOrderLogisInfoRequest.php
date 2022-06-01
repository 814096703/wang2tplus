<?php
/**
 * TOP API: tmall.nr.order.logis.info request
 * 
 * @author auto create
 * @since 1.0, 2019.01.04
 */
class TmallNrOrderLogisInfoRequest
{
	/** 
	 * 来源标识
	 **/
	private $channel;
	
	/** 
	 * 主订单号
	 **/
	private $mainOrderIds;
	
	/** 
	 * 卖家ID
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setMainOrderIds($mainOrderIds)
	{
		$this->mainOrderIds = $mainOrderIds;
		$this->apiParas["main_order_ids"] = $mainOrderIds;
	}

	public function getMainOrderIds()
	{
		return $this->mainOrderIds;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "tmall.nr.order.logis.info";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channel,"channel");
		RequestCheckUtil::checkNotNull($this->mainOrderIds,"mainOrderIds");
		RequestCheckUtil::checkMaxListSize($this->mainOrderIds,20,"mainOrderIds");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
