<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.apply.push request
 * 
 * @author auto create
 * @since 1.0, 2020.08.31
 */
class WdtPurchaseApplyPushRequest
{
	/** 
	 * 采购明细节点
	 **/
	private $detailsList;
	
	/** 
	 * 申请人(员工编号)
	 **/
	private $employeeNo;
	
	/** 
	 * 预计到货时间
	 **/
	private $expectedTime;
	
	/** 
	 * 自动提交
	 **/
	private $isSubmit;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setDetailsList($detailsList)
	{
		$this->detailsList = $detailsList;
		$this->apiParas["details_list"] = $detailsList;
	}

	public function getDetailsList()
	{
		return $this->detailsList;
	}

	public function setEmployeeNo($employeeNo)
	{
		$this->employeeNo = $employeeNo;
		$this->apiParas["employee_no"] = $employeeNo;
	}

	public function getEmployeeNo()
	{
		return $this->employeeNo;
	}

	public function setExpectedTime($expectedTime)
	{
		$this->expectedTime = $expectedTime;
		$this->apiParas["expected_time"] = $expectedTime;
	}

	public function getExpectedTime()
	{
		return $this->expectedTime;
	}

	public function setIsSubmit($isSubmit)
	{
		$this->isSubmit = $isSubmit;
		$this->apiParas["is_submit"] = $isSubmit;
	}

	public function getIsSubmit()
	{
		return $this->isSubmit;
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setWarehouseNo($warehouseNo)
	{
		$this->warehouseNo = $warehouseNo;
		$this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo()
	{
		return $this->warehouseNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.apply.push";
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
