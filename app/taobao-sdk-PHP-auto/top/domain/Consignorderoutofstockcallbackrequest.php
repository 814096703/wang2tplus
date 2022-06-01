<?php

/**
 * 缺货回告请求模型
 * @author auto create
 */
class Consignorderoutofstockcallbackrequest
{
	
	/** 
	 * 履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 外部业务号
	 **/
	public $out_biz_id;
	
	/** 
	 * 缺货明细
	 **/
	public $out_of_stock_items;
	
	/** 
	 * 缺货原因
	 **/
	public $out_of_stock_reason;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>