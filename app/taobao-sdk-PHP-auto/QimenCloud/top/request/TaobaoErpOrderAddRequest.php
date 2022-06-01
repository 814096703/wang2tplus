<?php
/**
 * TOP API: qimen.taobao.erp.order.add request
 * 
 * @author auto create
 * @since 1.0, 2017.08.07
 */
class TaobaoErpOrderAddRequest
{
	/** 
	 * 数据详情
	 **/
	private $data;
	
	/** 
	 * 总计个数
	 **/
	private $total;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setTotal($total)
	{
		$this->total = $total;
		$this->apiParas["total"] = $total;
	}

	public function getTotal()
	{
		return $this->total;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.order.add";
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
