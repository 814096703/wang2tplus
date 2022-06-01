<?php
/**
 * TOP API: cainiao.smartdelivery.i.get request
 * 
 * @author auto create
 * @since 1.0, 2019.01.25
 */
class CainiaoSmartdeliveryIGetRequest
{
	/** 
	 * <a href="http://open.taobao.com/docs/doc.htm?treeId=319&articleId=106295&docType=1">智能发货引擎</a>批量请求参数
	 **/
	private $smartDeliveryBatchRequest;
	
	private $apiParas = array();
	
	public function setSmartDeliveryBatchRequest($smartDeliveryBatchRequest)
	{
		$this->smartDeliveryBatchRequest = $smartDeliveryBatchRequest;
		$this->apiParas["smart_delivery_batch_request"] = $smartDeliveryBatchRequest;
	}

	public function getSmartDeliveryBatchRequest()
	{
		return $this->smartDeliveryBatchRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.smartdelivery.i.get";
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
