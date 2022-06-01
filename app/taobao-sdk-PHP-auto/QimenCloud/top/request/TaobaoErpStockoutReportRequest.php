<?php
/**
 * TOP API: qimen.taobao.erp.stockout.report request
 * 
 * @author auto create
 * @since 1.0, 2018.04.11
 */
class TaobaoErpStockoutReportRequest
{
	/** 
	 * 详情
	 **/
	private $bill;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	private $apiParas = array();
	
	public function setBill($bill)
	{
		$this->bill = $bill;
		$this->apiParas["bill"] = $bill;
	}

	public function getBill()
	{
		return $this->bill;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.stockout.report";
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
