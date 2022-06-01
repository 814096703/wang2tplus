<?php
/**
 * TOP API: qimen.taobao.erp.purchase.returnorder.add request
 * 
 * @author auto create
 * @since 1.0, 2019.03.11
 */
class TaobaoErpPurchaseReturnorderAddRequest
{
	/** 
	 * 制单人
	 **/
	private $createEmp;
	
	/** 
	 * 制单日期
	 **/
	private $createTime;
	
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
	 * 采购退货单号
	 **/
	private $returnorder;
	
	/** 
	 * sku详情
	 **/
	private $sku;
	
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

	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["CreateTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
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

	public function setReturnorder($returnorder)
	{
		$this->returnorder = $returnorder;
		$this->apiParas["returnorder"] = $returnorder;
	}

	public function getReturnorder()
	{
		return $this->returnorder;
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

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.purchase.returnorder.add";
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
