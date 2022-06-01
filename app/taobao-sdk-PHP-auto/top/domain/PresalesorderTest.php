<?php

/**
 * 预售单
 * @author auto create
 */
class PresalesorderTest
{
	
	/** 
	 * 订单信息
	 **/
	public $order_lines;
	
	/** 
	 * 前台订单(店铺订单)创建时间(下单时间)
	 **/
	public $place_order_time;
	
	/** 
	 * 出库单号
	 **/
	public $presales_order_code;
	
	/** 
	 * 收件人信息
	 **/
	public $receiver_info;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 仓库
	 **/
	public $store_code;
	
	/** 
	 * 订单总金额=应收金额+已收金额=商品总金额-订单折扣金额+快递费用
	 **/
	public $total_amount;	
}
?>