<?php

/**
 * 商品行列表
 * @author auto create
 */
class WarehouseReverseGoodsItemDto
{
	
	/** 
	 * 实付金额（单位：分）
	 **/
	public $actual_fee;
	
	/** 
	 * 实发数量
	 **/
	public $actual_qty;
	
	/** 
	 * 商品名称
	 **/
	public $auction_name;
	
	/** 
	 * 扩展字段，JSONObject格式
	 **/
	public $extra;
	
	/** 
	 * 货品行ID
	 **/
	public $id;
	
	/** 
	 * 货品编码
	 **/
	public $item_code;
	
	/** 
	 * 货品仓储系统编码
	 **/
	public $item_id;
	
	/** 
	 * 货品名称
	 **/
	public $item_name;
	
	/** 
	 * 子订单ID
	 **/
	public $oid;
	
	/** 
	 * 货主
	 **/
	public $owner_nick;
	
	/** 
	 * 计划数量
	 **/
	public $plan_qty;
	
	/** 
	 * 计划状态（1=正品；2=残品；3=部分正品）
	 **/
	public $plan_status;
	
	/** 
	 * 单价（单位：分）
	 **/
	public $price;
	
	/** 
	 * 商品条码
	 **/
	public $qr_code;
	
	/** 
	 * 状态（1=正品；2=残品；3=部分正品；4=未确认）
	 **/
	public $status;
	
	/** 
	 * 1=淘系子订单，2=赠品,3=未知
	 **/
	public $type;	
}
?>