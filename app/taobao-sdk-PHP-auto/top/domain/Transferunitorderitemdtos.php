<?php

/**
 * 品基本信息
 * @author auto create
 */
class Transferunitorderitemdtos
{
	
	/** 
	 * 货品条码
	 **/
	public $item_code;
	
	/** 
	 * 后端货品id
	 **/
	public $item_id;
	
	/** 
	 * 后端货品名称
	 **/
	public $item_name;
	
	/** 
	 * 计划下发数量
	 **/
	public $plan_quantity;
	
	/** 
	 * 实际回传数量
	 **/
	public $real_quantity;
	
	/** 
	 * 品信息
	 **/
	public $transfer_extend_order_item_list;
	
	/** 
	 * LBX订单号
	 **/
	public $unit_biz_code;	
}
?>