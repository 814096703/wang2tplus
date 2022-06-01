<?php

/**
 * 请求主体
 * @author auto create
 */
class BmsTaobaoOrderIntercepteRequest
{
	
	/** 
	 * 明细
	 **/
	public $order_items;
	
	/** 
	 * 货主ID
	 **/
	public $owner_user_id;
	
	/** 
	 * 拦截id
	 **/
	public $refund_id;
	
	/** 
	 * 店铺昵称
	 **/
	public $shop_nick;
	
	/** 
	 * 交易号
	 **/
	public $trade_id;
	
	/** 
	 * 拦截类型
	 **/
	public $type;
	
	/** 
	 * 店铺ID
	 **/
	public $user_id;	
}
?>