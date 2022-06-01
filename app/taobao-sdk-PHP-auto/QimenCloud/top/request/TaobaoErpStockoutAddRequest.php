<?php
/**
 * TOP API: qimen.taobao.erp.stockout.add request
 * 
 * @author auto create
 * @since 1.0, 2018.04.11
 */
class TaobaoErpStockoutAddRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 货品主键类型(0:货品编码;1:条码+附加码)
	 **/
	private $keytype;
	
	/** 
	 * 出库类型(0:其它出库)
	 **/
	private $operationtype;
	
	/** 
	 * 操作人
	 **/
	private $operatorPers;
	
	/** 
	 * 详情
	 **/
	private $orderInfo;
	
	/** 
	 * 其他费用
	 **/
	private $otherFee;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 出库单号
	 **/
	private $stockoutNo;
	
	/** 
	 * 出库原因
	 **/
	private $thecause;
	
	/** 
	 * 仓库id
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setKeytype($keytype)
	{
		$this->keytype = $keytype;
		$this->apiParas["keytype"] = $keytype;
	}

	public function getKeytype()
	{
		return $this->keytype;
	}

	public function setOperationtype($operationtype)
	{
		$this->operationtype = $operationtype;
		$this->apiParas["operationtype"] = $operationtype;
	}

	public function getOperationtype()
	{
		return $this->operationtype;
	}

	public function setOperatorPers($operatorPers)
	{
		$this->operatorPers = $operatorPers;
		$this->apiParas["operator_pers"] = $operatorPers;
	}

	public function getOperatorPers()
	{
		return $this->operatorPers;
	}

	public function setOrderInfo($orderInfo)
	{
		$this->orderInfo = $orderInfo;
		$this->apiParas["order_info"] = $orderInfo;
	}

	public function getOrderInfo()
	{
		return $this->orderInfo;
	}

	public function setOtherFee($otherFee)
	{
		$this->otherFee = $otherFee;
		$this->apiParas["other_fee"] = $otherFee;
	}

	public function getOtherFee()
	{
		return $this->otherFee;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setStockoutNo($stockoutNo)
	{
		$this->stockoutNo = $stockoutNo;
		$this->apiParas["stockout_no"] = $stockoutNo;
	}

	public function getStockoutNo()
	{
		return $this->stockoutNo;
	}

	public function setThecause($thecause)
	{
		$this->thecause = $thecause;
		$this->apiParas["thecause"] = $thecause;
	}

	public function getThecause()
	{
		return $this->thecause;
	}

	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
		$this->apiParas["warehouse_id"] = $warehouseId;
	}

	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.stockout.add";
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
