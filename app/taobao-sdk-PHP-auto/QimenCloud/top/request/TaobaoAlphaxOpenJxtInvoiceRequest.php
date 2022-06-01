<?php
/**
 * TOP API: qimen.taobao.alphax.open.jxt.invoice request
 * 
 * @author auto create
 * @since 1.0, 2018.08.20
 */
class TaobaoAlphaxOpenJxtInvoiceRequest
{
	/** 
	 * 公司抬头
	 **/
	private $companyTitle;
	
	/** 
	 * api新增字段，主要用于扩展参数，例如增值税扩展字段（registered_address 注册地址、registered_phone 注册电话、bank 开户行、账户 ）
	 **/
	private $extendArg;
	
	/** 
	 * 发票属性(0:公司；1：个人)
	 **/
	private $invoiceAttr;
	
	/** 
	 * 发票形态 （1:电子发票;   2：纸质发票)
	 **/
	private $invoiceKind;
	
	/** 
	 * 发票类型（1:普通发票；2：增值税专用发票）
	 **/
	private $invoiceType;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 卖家主账号id
	 **/
	private $sellerId;
	
	/** 
	 * 卖家名称
	 **/
	private $sellerNick;
	
	/** 
	 * 税号
	 **/
	private $taxNo;
	
	private $apiParas = array();
	
	public function setCompanyTitle($companyTitle)
	{
		$this->companyTitle = $companyTitle;
		$this->apiParas["company_title"] = $companyTitle;
	}

	public function getCompanyTitle()
	{
		return $this->companyTitle;
	}

	public function setExtendArg($extendArg)
	{
		$this->extendArg = $extendArg;
		$this->apiParas["extend_arg"] = $extendArg;
	}

	public function getExtendArg()
	{
		return $this->extendArg;
	}

	public function setInvoiceAttr($invoiceAttr)
	{
		$this->invoiceAttr = $invoiceAttr;
		$this->apiParas["invoice_attr"] = $invoiceAttr;
	}

	public function getInvoiceAttr()
	{
		return $this->invoiceAttr;
	}

	public function setInvoiceKind($invoiceKind)
	{
		$this->invoiceKind = $invoiceKind;
		$this->apiParas["invoice_kind"] = $invoiceKind;
	}

	public function getInvoiceKind()
	{
		return $this->invoiceKind;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setTaxNo($taxNo)
	{
		$this->taxNo = $taxNo;
		$this->apiParas["tax_no"] = $taxNo;
	}

	public function getTaxNo()
	{
		return $this->taxNo;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.alphax.open.jxt.invoice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->invoiceAttr,"invoiceAttr");
		RequestCheckUtil::checkNotNull($this->invoiceKind,"invoiceKind");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
