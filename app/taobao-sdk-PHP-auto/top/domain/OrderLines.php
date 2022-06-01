<?php

/**
 * 订单信息
 * @author auto create
 */
class Orderlines
{
	
	/** 
	 * 实际成交价
	 **/
	public $actual_price;
	
	/** 
	 * 商品编码
	 **/
	public $item_code;
	
	/** 
	 * 商品ID,前端宝贝ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 单据行
	 **/
	public $order_line_no;
	
	/** 
	 * 应发商品数量
	 **/
	public $plan_qty;
	
	/** 
	 * 零售价=实际成交价+单件商品折扣金额
	 **/
	public $retail_price;
	
	/** 
	 * 店铺编码
	 **/
	public $shop_code;
	
	/** 
	 * 交易平台订单
	 **/
	public $source_order_code;
	
	/** 
	 * 交易平台子订单编码
	 **/
	public $sub_source_order_code;	
}
?>