<?php

/**
 * 入参
 * @author auto create
 */
class NrCancelFulfillReqDto
{
	
	/** 
	 * 取消类型。操作人类型:1寄件人,3客服小二,4快递员, 5CP, 6收件人,8门店取消,100系统
	 **/
	public $cancel_oper_type;
	
	/** 
	 * 操作取消人员ID号
	 **/
	public $cancel_oper_user_id;
	
	/** 
	 * 操作取消人员姓名
	 **/
	public $cancel_oper_user_name;
	
	/** 
	 * 取消原因的说明
	 **/
	public $cancel_reason;
	
	/** 
	 * 取消的对应编码
	 **/
	public $cancel_reason_code;
	
	/** 
	 * 淘宝交易的主订单号
	 **/
	public $main_order_id;
	
	/** 
	 * 淘宝商家的sellerID
	 **/
	public $seller_id;	
}
?>