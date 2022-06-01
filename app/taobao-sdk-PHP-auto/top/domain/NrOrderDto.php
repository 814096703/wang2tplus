<?php

/**
 * 子订单列表
 * @author auto create
 */
class NrOrderDto
{
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * createTime
	 **/
	public $create_time;
	
	/** 
	 * itemId
	 **/
	public $item_id;
	
	/** 
	 * 数量
	 **/
	public $num;
	
	/** 
	 * 子订单号
	 **/
	public $order_id;
	
	/** 
	 * 退款状态可选值WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意)，WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货)，WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货)，SELLER_REFUSE_BUYER(卖家拒绝退款)，CLOSED(退款关闭)，SUCCESS(退款成功)
	 **/
	public $refund_status;
	
	/** 
	 * 商家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * skuId
	 **/
	public $sku_id;
	
	/** 
	 * title
	 **/
	public $title;	
}
?>