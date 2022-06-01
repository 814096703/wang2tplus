<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.wms.stockinout.order.push request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtVipWmsStockinoutOrderPushRequest
{
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 委外出入库列表节点
	 **/
	private $stockinInfo;
	
	private $apiParas = array();
	
	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStockinInfo($stockinInfo)
	{
		$this->stockinInfo = $stockinInfo;
		$this->apiParas["stockin_info"] = $stockinInfo;
	}

	public function getStockinInfo()
	{
		return $this->stockinInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.vip.wms.stockinout.order.push";
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
