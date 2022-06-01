<?php
/**
 * TOP API: qimen.taobao.erp.purchase.add request
 * 
 * @author auto create
 * @since 1.0, 2019.03.11
 */
class TaobaoErpPurchaseAddRequest
{
	/** 
	 * 制单人
	 **/
	private $createEmp;
	
	/** 
	 * 创建采购单时间
	 **/
	private $createTime;
	
	/** 
	 * 路由参数
	 **/
	private $customerId;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 采购单号
	 **/
	private $purchaseid;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * sku详情
	 **/
	private $sku;
	
	/** 
	 * 供货商代码
	 **/
	private $supplierCode;
	
	/** 
	 * 仓库代码
	 **/
	private $wareHouseCode;
	
	/** 
	 * 库区代码
	 **/
	private $whareaTypeCode;
	
	private $apiParas = array();
	
	public function setCreateEmp($createEmp)
	{
		$this->createEmp = $createEmp;
		$this->apiParas["createEmp"] = $createEmp;
	}

	public function getCreateEmp()
	{
		return $this->createEmp;
	}

	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
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

	public function setPurchaseid($purchaseid)
	{
		$this->purchaseid = $purchaseid;
		$this->apiParas["purchaseid"] = $purchaseid;
	}

	public function getPurchaseid()
	{
		return $this->purchaseid;
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

	public function setSku($sku)
	{
		$this->sku = $sku;
		$this->apiParas["sku"] = $sku;
	}

	public function getSku()
	{
		return $this->sku;
	}

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function setWareHouseCode($wareHouseCode)
	{
		$this->wareHouseCode = $wareHouseCode;
		$this->apiParas["wareHouseCode"] = $wareHouseCode;
	}

	public function getWareHouseCode()
	{
		return $this->wareHouseCode;
	}

	public function setWhareaTypeCode($whareaTypeCode)
	{
		$this->whareaTypeCode = $whareaTypeCode;
		$this->apiParas["whareaTypeCode"] = $whareaTypeCode;
	}

	public function getWhareaTypeCode()
	{
		return $this->whareaTypeCode;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.erp.purchase.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->purchaseid,"purchaseid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
