<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.trade.modify request
 * 
 * @author auto create
 * @since 1.0, 2020.06.01
 */
class WdtVipTradeModifyRequest
{
	/** 
	 * 客服备注
	 **/
	private $csRemark;
	
	/** 
	 * 是否覆盖原有标记   0.不允许覆盖，1.允许覆盖，默认为1
	 **/
	private $flagCover;
	
	/** 
	 * 标记名称
	 **/
	private $flagName;
	
	/** 
	 * 发票编号
	 **/
	private $invoiceNo;
	
	/** 
	 * 物流公司编号
	 **/
	private $logisticsCode;
	
	/** 
	 * 物流单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 打印备注
	 **/
	private $printRemark;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 订单编号
	 **/
	private $tradeNo;
	
	private $apiParas = array();
	
	public function setCsRemark($csRemark)
	{
		$this->csRemark = $csRemark;
		$this->apiParas["cs_remark"] = $csRemark;
	}

	public function getCsRemark()
	{
		return $this->csRemark;
	}

	public function setFlagCover($flagCover)
	{
		$this->flagCover = $flagCover;
		$this->apiParas["flag_cover"] = $flagCover;
	}

	public function getFlagCover()
	{
		return $this->flagCover;
	}

	public function setFlagName($flagName)
	{
		$this->flagName = $flagName;
		$this->apiParas["flag_name"] = $flagName;
	}

	public function getFlagName()
	{
		return $this->flagName;
	}

	public function setInvoiceNo($invoiceNo)
	{
		$this->invoiceNo = $invoiceNo;
		$this->apiParas["invoice_no"] = $invoiceNo;
	}

	public function getInvoiceNo()
	{
		return $this->invoiceNo;
	}

	public function setLogisticsCode($logisticsCode)
	{
		$this->logisticsCode = $logisticsCode;
		$this->apiParas["logistics_code"] = $logisticsCode;
	}

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
	}

	public function setPrintRemark($printRemark)
	{
		$this->printRemark = $printRemark;
		$this->apiParas["print_remark"] = $printRemark;
	}

	public function getPrintRemark()
	{
		return $this->printRemark;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo()
	{
		return $this->tradeNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.vip.trade.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
