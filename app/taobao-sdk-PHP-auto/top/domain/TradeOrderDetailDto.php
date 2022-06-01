<?php

/**
 * 主订单列表
 * @author auto create
 */
class TradeOrderDetailDto
{
	
	/** 
	 * 预约结束时间
	 **/
	public $appoint_end_time;
	
	/** 
	 * 预约开始时间
	 **/
	public $appoint_start_time;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 订单创建时间
	 **/
	public $create_time;
	
	/** 
	 * 子订单列表
	 **/
	public $order_d_t_os;
	
	/** 
	 * 子订单编号
	 **/
	public $order_id;
	
	/** 
	 * 付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 邮费单位分
	 **/
	public $post_fee;
	
	/** 
	 * 收货地址
	 **/
	public $receiver_address;
	
	/** 
	 * 市
	 **/
	public $receiver_city;
	
	/** 
	 * 区
	 **/
	public $receiver_district;
	
	/** 
	 * 手机号码
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收货人
	 **/
	public $receiver_name;
	
	/** 
	 * 电话号码
	 **/
	public $receiver_phone;
	
	/** 
	 * 省
	 **/
	public $receiver_province;
	
	/** 
	 * 镇
	 **/
	public $receiver_town;
	
	/** 
	 * 商家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 可选值:TRADE_NO_CREATE_PAY(没有创建支付宝交易)，WAIT_BUYER_PAY(等待买家付款)，SELLER_CONSIGNED_PART(卖家部分发货)，WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)，WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)，TRADE_BUYER_SIGNED(买家已签收,货到付款专用)，TRADE_FINISHED(交易成功)，TRADE_CLOSED(付款以后用户退款成功，交易自动关闭)，TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)，PAY_PENDING(国际信用卡支付付款确认中) * WAIT_PRE_AUTH_CONFIRM(0元购合约中)，PAID_FORBID_CONSIGN(拼团中订单或者发货强管控的订单，已付款但禁止发货)
	 **/
	public $status;
	
	/** 
	 * 门店编码
	 **/
	public $store_code;	
}
?>