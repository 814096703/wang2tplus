<?php
/**
 * TOP API: qimen.taobao.erp.wholesale.order.add request
 * 
 * @author auto create
 * @since 1.0, 2018.09.25
 */
class TaobaoErpWholesaleOrderAddRequest
{
	/** 
	 * 制单人
	 **/
	private $createEmp;
	
	/** 
	 * 创建时间
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
	 * 收货地址（省市区之间用空格)
	 **/
	private $address;
	
	/** 
	 * 客户代码
	 **/
	private $customerCode;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 物流公司大写代码
	 **/
	private $logistics;
	
	/** 
	 * 收货人
	 **/
	private $name;
	
	/** 
	 * 收货人手机
	 **/
	private $phone;
	
	/** 
	 * sku详情
	 **/
	private $sku;
	
	/** 
	 * 批发通知单号
	 **/
	private $wholesaleorderId;
	
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

	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setCustomerCode($customerCode)
	{
		$this->customerCode = $customerCode;
		$this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode()
	{
		return $this->customerCode;
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

	public function setLogistics($logistics)
	{
		$this->logistics = $logistics;
		$this->apiParas["logistics"] = $logistics;
	}

	public function getLogistics()
	{
		return $this->logistics;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
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

	public function setWholesaleorderId($wholesaleorderId)
	{
		$this->wholesaleorderId = $wholesaleorderId;
		$this->apiParas["wholesaleorder_id"] = $wholesaleorderId;
	}

	public function getWholesaleorderId()
	{
		return $this->wholesaleorderId;
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
		return "qimen.taobao.erp.wholesale.order.add";
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
