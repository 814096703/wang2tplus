<?php

/**
 * 库存调整信息
 * @author auto create
 */
class InventoryAdjustInfo
{
	
	/** 
	 * 调整类型
	 **/
	public $adjust_type;
	
	/** 
	 * 流水号
	 **/
	public $bill_num;
	
	/** 
	 * 库存类型
	 **/
	public $inventory_type;
	
	/** 
	 * 需要调整的原始门店ID
	 **/
	public $original_warehouse_id;
	
	/** 
	 * ISV系统中商品编码
	 **/
	public $outer_id;
	
	/** 
	 * 需调整的库存数量
	 **/
	public $quantity;
	
	/** 
	 * 淘宝后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 需要调整到的目标门店ID
	 **/
	public $target_warehouse_id;
	
	/** 
	 * 淘宝子订单号
	 **/
	public $tb_sub_trade_order;
	
	/** 
	 * 淘宝订单号
	 **/
	public $tb_trade_order;	
}
?>