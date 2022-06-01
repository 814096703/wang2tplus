<?php

/**
 * 请求实体
 * @author auto create
 */
class BmsTradeConsignRequest
{
	
	/** 
	 * 明细
	 **/
	public $order_items;
	
	/** 
	 * 订单类型(201 一般交易出库单,502 换货出库单,503 补发出库单)
	 **/
	public $order_type;
	
	/** 
	 * 货主ID
	 **/
	public $owner_user_id;
	
	/** 
	 * 店铺昵称
	 **/
	public $shop_nick;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 交易号
	 **/
	public $trade_id;
	
	/** 
	 * 店铺ID
	 **/
	public $user_id;	
}
?>