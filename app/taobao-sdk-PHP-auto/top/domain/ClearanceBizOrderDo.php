<?php

/**
 * 订单数据封装
 * @author auto create
 */
class ClearanceBizOrderDo
{
	
	/** 
	 * 淘系订单id
	 **/
	public $biz_order_id;
	
	/** 
	 * 淘系买家id
	 **/
	public $buyer_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 子订单列表封装
	 **/
	public $order_line_list;
	
	/** 
	 * 付款状态
	 **/
	public $pay_status;
	
	/** 
	 * 邮费
	 **/
	public $post_fee;
	
	/** 
	 * 退款状态
	 **/
	public $refund_status;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家旺旺
	 **/
	public $seller_wang_wang_id;
	
	/** 
	 * 税费封装
	 **/
	public $tax_d_o;
	
	/** 
	 * 买家实付款
	 **/
	public $tf;	
}
?>