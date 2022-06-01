<?php
/**
 * TOP API: qimen.taobao.erp.entryorder.add request
 * 
 * @author auto create
 * @since 1.0, 2018.04.11
 */
class TaobaoErpEntryorderAddRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 合计金额
	 **/
	private $goodsTotal;
	
	/** 
	 * 货品主键类型
	 **/
	private $keytype;
	
	/** 
	 * 货运费用
	 **/
	private $logisticFee;
	
	/** 
	 * 货运单号
	 **/
	private $logisticNo;
	
	/** 
	 * 单据类型（0其他入库）
	 **/
	private $operationtype;
	
	/** 
	 * 登记人
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
	 * 供应商id
	 **/
	private $providerid;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 入库单状态(待审核;已审核;被取消)
	 **/
	private $status;
	
	/** 
	 * 入库单号
	 **/
	private $stockinNo;
	
	/** 
	 * 入库原因
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

	public function setGoodsTotal($goodsTotal)
	{
		$this->goodsTotal = $goodsTotal;
		$this->apiParas["goods_total"] = $goodsTotal;
	}

	public function getGoodsTotal()
	{
		return $this->goodsTotal;
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

	public function setLogisticFee($logisticFee)
	{
		$this->logisticFee = $logisticFee;
		$this->apiParas["logistic_fee"] = $logisticFee;
	}

	public function getLogisticFee()
	{
		return $this->logisticFee;
	}

	public function setLogisticNo($logisticNo)
	{
		$this->logisticNo = $logisticNo;
		$this->apiParas["logistic_no"] = $logisticNo;
	}

	public function getLogisticNo()
	{
		return $this->logisticNo;
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

	public function setProviderid($providerid)
	{
		$this->providerid = $providerid;
		$this->apiParas["providerid"] = $providerid;
	}

	public function getProviderid()
	{
		return $this->providerid;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStockinNo($stockinNo)
	{
		$this->stockinNo = $stockinNo;
		$this->apiParas["stockin_no"] = $stockinNo;
	}

	public function getStockinNo()
	{
		return $this->stockinNo;
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
		return "qimen.taobao.erp.entryorder.add";
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
