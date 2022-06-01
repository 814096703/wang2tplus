<?php

/**
 * 退回订单货品信息列表
 * @author auto create
 */
class Orderitems
{
	
	/** 
	 * erp订单明细行号
	 **/
	public $erp_order_line;
	
	/** 
	 * 货品计划退回数量
	 **/
	public $plan_return_quantity;
	
	/** 
	 * 货品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 原正向发货履约子单号
	 **/
	public $sub_order_code;	
}
?>