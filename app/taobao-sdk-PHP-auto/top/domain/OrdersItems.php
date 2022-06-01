<?php

/**
 * 订单商品详情
 * @author auto create
 */
class OrdersItems
{
	
	/** 
	 * 货品编码
	 **/
	public $bn;
	
	/** 
	 * SKU成本价
	 **/
	public $cost;
	
	/** 
	 * 商品优惠金额
	 **/
	public $discount_fee;
	
	/** 
	 * SKU所属商品ID
	 **/
	public $iid;
	
	/** 
	 * 货品状态（normal正常;cancel删除）
	 **/
	public $item_status;
	
	/** 
	 * SKU类型（product货品;gift赠品;adjunct配件;pkg捆绑）
	 **/
	public $item_type;
	
	/** 
	 * 货品名称
	 **/
	public $name;
	
	/** 
	 * SKU购买数量
	 **/
	public $num;
	
	/** 
	 * SKU原价
	 **/
	public $price;
	
	/** 
	 * 促销方案ID
	 **/
	public $promotion_id;
	
	/** 
	 * SKU单价
	 **/
	public $sale_price;
	
	/** 
	 * SKU积分
	 **/
	public $score;
	
	/** 
	 * SKU已发数量
	 **/
	public $sendnum;
	
	/** 
	 * 商品的最小库存单位
	 **/
	public $sku_id;
	
	/** 
	 * SKU的值
	 **/
	public $sku_properties;
	
	/** 
	 * SKU金额小计
	 **/
	public $total_item_fee;
	
	/** 
	 * SKU重量
	 **/
	public $weight;	
}
?>