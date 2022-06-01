<?php

/**
 * 请求
 * @author auto create
 */
class WmsYcdbatchReportRequest
{
	
	/** 
	 * 单据日期
	 **/
	public $bill_date;
	
	/** 
	 * wms移仓单记账日期
	 **/
	public $charge_date;
	
	/** 
	 * wms移仓单记账人
	 **/
	public $charge_emp;
	
	/** 
	 * 移仓单明细字段
	 **/
	public $products;
	
	/** 
	 * 移仓单备注
	 **/
	public $remark;
	
	/** 
	 * TBillMoveLocDirect
	 **/
	public $table_name;
	
	/** 
	 * wms移仓单编号
	 **/
	public $unique_key;
	
	/** 
	 * 1
	 **/
	public $upload_flag;	
}
?>