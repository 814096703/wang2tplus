<?php

/**
 * 入参
 * @author auto create
 */
class NrZqsGoodsReadyReqDto
{
	
	/** 
	 * 业务标识dds，zqs等
	 **/
	public $biz_identity;
	
	/** 
	 * 淘宝交易订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 经销商的姓名
	 **/
	public $dealer_name;
	
	/** 
	 * 经销商的电话
	 **/
	public $dealer_phone;
	
	/** 
	 * 提货码
	 **/
	public $outer_got_code;
	
	/** 
	 * 配送人员姓名
	 **/
	public $performer_name;
	
	/** 
	 * 配送人员电话号码
	 **/
	public $performer_phone;
	
	/** 
	 * 卖家的sellerId
	 **/
	public $seller_id;
	
	/** 
	 * 可选参数，编码
	 **/
	public $trace_id;	
}
?>