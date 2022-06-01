<?php
/**
 * TOP API: taobao.qianniu.airisland.erpinfo.add request
 * 
 * @author auto create
 * @since 1.0, 2020.10.15
 */
class QianniuAirislandErpinfoAddRequest
{
	/** 
	 * 录入ERP数据列表
	 **/
	private $orderDetailDoList;
	
	private $apiParas = array();
	
	public function setOrderDetailDoList($orderDetailDoList)
	{
		$this->orderDetailDoList = $orderDetailDoList;
		$this->apiParas["order_detail_do_list"] = $orderDetailDoList;
	}

	public function getOrderDetailDoList()
	{
		return $this->orderDetailDoList;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.airisland.erpinfo.add";
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
