<?php

/**
 * 订单信息，数量限制100
 * @author auto create
 */
class TradeOrder
{
	
	/** 
	 * 买家留言
	 **/
	public $buyer_message;
	
	/** 
	 * 卖家备注
	 **/
	public $seller_memo;
	
	/** 
	 * 订单号，特别注意：对于淘系订单，务必要传淘系订单号
	 **/
	public $trade_order_id;	
}
?>