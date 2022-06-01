<?php

/**
 * 子订单列表封装
 * @author auto create
 */
class ClearanceOrderLineDo
{
	
	/** 
	 * 货款
	 **/
	public $actual_value;
	
	/** 
	 * 商品单价
	 **/
	public $auction_price;
	
	/** 
	 * 品牌名称
	 **/
	public $brand_name;
	
	/** 
	 * 根类目
	 **/
	public $category_id;
	
	/** 
	 * 申报要素
	 **/
	public $declaration;
	
	/** 
	 * 淘系商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品链接
	 **/
	public $item_url;
	
	/** 
	 * 原产国
	 **/
	public $original_country;
	
	/** 
	 * 付款状态
	 **/
	public $pay_status;
	
	/** 
	 * 商品购买数量
	 **/
	public $quantity;
	
	/** 
	 * 退款状态
	 **/
	public $refund_status;
	
	/** 
	 * 主类目
	 **/
	public $root_cat;
	
	/** 
	 * 销售单位
	 **/
	public $sale_unit;
	
	/** 
	 * 货品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 销售属性
	 **/
	public $sell_property;
	
	/** 
	 * 子订单id
	 **/
	public $sub_order_id;
	
	/** 
	 * 税费封装
	 **/
	public $tax_d_o;
	
	/** 
	 * 计量单位封装
	 **/
	public $unit_d_o;
	
	/** 
	 * 镜像商品ID
	 **/
	public $virtual_item_id;	
}
?>