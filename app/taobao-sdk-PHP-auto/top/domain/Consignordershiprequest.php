<?php

/**
 * 发货回传请求模型
 * @author auto create
 */
class Consignordershiprequest
{
	
	/** 
	 * 履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 履约子单明细
	 **/
	public $order_items;
	
	/** 
	 * 外部业务号，幂等控制使用
	 **/
	public $out_biz_id;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 发货仓编码
	 **/
	public $store_code;
	
	/** 
	 * 发货仓名称
	 **/
	public $store_name;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;
	
	/** 
	 * 包裹列表
	 **/
	public $tms_orders;
	
	/** 
	 * 是否整单发货,目前只支持履约单整单发货回传
	 **/
	public $whole_sheet_consigned;	
}
?>