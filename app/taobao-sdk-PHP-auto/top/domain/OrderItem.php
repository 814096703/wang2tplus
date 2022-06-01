<?php

/**
 * 订单明细
 * @author auto create
 */
class OrderItem
{
	
	/** 
	 * B-PART
	 **/
	public $bpcode;
	
	/** 
	 * 库存增减类型：1增、2减
	 **/
	public $inv_change_type;
	
	/** 
	 * 库存类型：1 可销售库存 (正品) 101 类型用来定义残次品 201 冻结类型库存 301 在途库存
	 **/
	public $inv_type;
	
	/** 
	 * 商家编码
	 **/
	public $item_code;
	
	/** 
	 * 货品id
	 **/
	public $item_id;
	
	/** 
	 * 货品名称
	 **/
	public $item_name;
	
	/** 
	 * 数量
	 **/
	public $quantity;	
}
?>