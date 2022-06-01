<?php
/**
 * TOP API: taobao.omniorder.storecollect.consume request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStorecollectConsumeRequest
{
	/** 
	 * 核销码
	 **/
	private $code;
	
	/** 
	 * 淘宝主订单ID
	 **/
	private $mainOrderId;
	
	/** 
	 * 核销操作人信息
	 **/
	private $operator;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.storecollect.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
