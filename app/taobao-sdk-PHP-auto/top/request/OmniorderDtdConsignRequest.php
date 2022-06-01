<?php
/**
 * TOP API: taobao.omniorder.dtd.consign request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderDtdConsignRequest
{
	/** 
	 * 淘宝订单主订单号
	 **/
	private $mainOrderId;
	
	/** 
	 * 发货对应的商户中心门店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.dtd.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
