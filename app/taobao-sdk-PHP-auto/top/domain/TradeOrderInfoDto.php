<?php

/**
 * 订单信息，目前一次请求只支持一个主订单
 * @author auto create
 */
class TradeOrderInfoDto
{
	
	/** 
	 * 主订单ID
	 **/
	public $main_order_id;
	
	/** 
	 * 子订单信息
	 **/
	public $sub_orders;	
}
?>