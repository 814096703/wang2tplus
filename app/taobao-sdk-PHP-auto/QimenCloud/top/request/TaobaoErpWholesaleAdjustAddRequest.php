<?php
/**
 * TOP API: qimen.taobao.erp.wholesale.adjust.add request
 * 
 * @author auto create
 * @since 1.0, 2018.09.25
 */
class TaobaoErpWholesaleAdjustAddRequest
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
	 * 渠道代码
	 **/
	private $channelCode;
	
	/** 
	 * 下单日期
	 **/
	private $created;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 业务类型(1 期初调整,2 盈亏调整,3差异调整,4 组装拆卸))
	 **/
	private $orderType;
	
	/** 
	 * sku详情
	 **/
	private $sku;
	
	/** 
	 * 库区代码
	 **/
	private $whareaTypeCode;
	
	/** 
	 * 库存调整单号
	 **/
	private $wholesaleadjust;
	
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

	public function setChannelCode($channelCode)
	{
		$this->channelCode = $channelCode;
		$this->apiParas["channelCode"] = $channelCode;
	}

	public function getChannelCode()
	{
		return $this->channelCode;
	}

	public function setCreated($created)
	{
		$this->created = $created;
		$this->apiParas["created"] = $created;
	}

	public function getCreated()
	{
		return $this->created;
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

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setWhareaTypeCode($whareaTypeCode)
	{
		$this->whareaTypeCode = $whareaTypeCode;
		$this->apiParas["whareaTypeCode"] = $whareaTypeCode;
	}

	public function getWhareaTypeCode()
	{
		return $this->whareaTypeCode;
	}

	public function setWholesaleadjust($wholesaleadjust)
	{
		$this->wholesaleadjust = $wholesaleadjust;
		$this->apiParas["wholesaleadjust"] = $wholesaleadjust;
	}

	public function getWholesaleadjust()
	{
		return $this->wholesaleadjust;
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
		return "qimen.taobao.erp.wholesale.adjust.add";
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
