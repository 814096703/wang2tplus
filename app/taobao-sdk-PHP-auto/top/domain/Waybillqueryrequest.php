<?php

/**
 * 查询面单请求参数
 * @author auto create
 */
class Waybillqueryrequest
{
	
	/** 
	 * 发货LP单号列表
	 **/
	public $consign_lp_order_codes;
	
	/** 
	 * 配送公司Code
	 **/
	public $cp_code;
	
	/** 
	 * 操作人id
	 **/
	public $operator;
	
	/** 
	 * 操作人名称
	 **/
	public $operator_name;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>