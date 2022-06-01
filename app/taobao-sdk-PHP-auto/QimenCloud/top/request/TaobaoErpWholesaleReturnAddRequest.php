<?php
/**
 * TOP API: qimen.taobao.erp.wholesale.return.add request
 * 
 * @author auto create
 * @since 1.0, 2019.04.17
 */
class TaobaoErpWholesaleReturnAddRequest
{
	/** 
	 * 制单人
	 **/
	private $createEmp;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库代码
	 **/
	private $wareHouseCode;
	
	/** 
	 * 路由参数
	 **/
	private $customerId;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * sku详情
	 **/
	private $sku;
	
	/** 
	 * 批发退货单号
	 **/
	private $wholesalereturn;
	
	/** 
	 * 制单日期
	 **/
	private $zdTime;
	
	private $apiParas = array();
	
	public function setCreateEmp($createEmp)
	{
		$this->createEmp = $createEmp;
		$this->apiParas["CreateEmp"] = $createEmp;
	}

	public function getCreateEmp()
	{
		return $this->createEmp;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["Remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setWareHouseCode($wareHouseCode)
	{
		$this->wareHouseCode = $wareHouseCode;
		$this->apiParas["WareHouseCode"] = $wareHouseCode;
	}

	public function getWareHouseCode()
	{
		return $this->wareHouseCode;
	}

	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
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

	public function setSku($sku)
	{
		$this->sku = $sku;
		$this->apiParas["sku"] = $sku;
	}

	public function getSku()
	{
		return $this->sku;
	}

	public function setWholesalereturn($wholesalereturn)
	{
		$this->wholesalereturn = $wholesalereturn;
		$this->apiParas["wholesalereturn"] = $wholesalereturn;
	}

	public function getWholesalereturn()
	{
		return $this->wholesalereturn;
	}

	public function setZdTime($zdTime)
	{
		$this->zdTime = $zdTime;
		$this->apiParas["zdTime"] = $zdTime;
	}

	public function getZdTime()
	{
		return $this->zdTime;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.wholesale.return.add";
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
