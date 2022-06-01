<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.invoice.info.update request
 * 
 * @author auto create
 * @since 1.0, 2020.08.26
 */
class WdtVipInvoiceInfoUpdateRequest
{
	/** 
	 * 接口信息
	 **/
	private $errorInfo;
	
	/** 
	 * 下载地址
	 **/
	private $filePath;
	
	/** 
	 * 发票代码
	 **/
	private $invoiceCode;
	
	/** 
	 * 发票编号
	 **/
	private $invoiceNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setErrorInfo($errorInfo)
	{
		$this->errorInfo = $errorInfo;
		$this->apiParas["error_info"] = $errorInfo;
	}

	public function getErrorInfo()
	{
		return $this->errorInfo;
	}

	public function setFilePath($filePath)
	{
		$this->filePath = $filePath;
		$this->apiParas["file_path"] = $filePath;
	}

	public function getFilePath()
	{
		return $this->filePath;
	}

	public function setInvoiceCode($invoiceCode)
	{
		$this->invoiceCode = $invoiceCode;
		$this->apiParas["invoice_code"] = $invoiceCode;
	}

	public function getInvoiceCode()
	{
		return $this->invoiceCode;
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.vip.invoice.info.update";
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
