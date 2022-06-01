<?php
/**
 * TOP API: cttbd3cm9o.taobao.crm.order.returngoods request
 * 
 * @author auto create
 * @since 1.0, 2020.02.13
 */
class TaobaoCrmOrderReturngoodsRequest
{
	/** 
	 * code
	 **/
	private $code;
	
	/** 
	 * 退货订单
	 **/
	private $data;
	
	/** 
	 * message
	 **/
	private $message;
	
	/** 
	 * total_count
	 **/
	private $totalCount;
	
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

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setTotalCount($totalCount)
	{
		$this->totalCount = $totalCount;
		$this->apiParas["total_count"] = $totalCount;
	}

	public function getTotalCount()
	{
		return $this->totalCount;
	}

	public function getApiMethodName()
	{
		return "cttbd3cm9o.taobao.crm.order.returngoods";
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
