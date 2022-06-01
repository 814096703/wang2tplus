<?php

/**
 * 销退单入库结果请求
 * @author auto create
 */
class Instoragefeedbackrequest
{
	
	/** 
	 * 逆向履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 逆向入库时间
	 **/
	public $instorage_time;
	
	/** 
	 * 退回订单货品信息列表
	 **/
	public $order_items;
	
	/** 
	 * ERP业务编码
	 **/
	public $out_biz_id;
	
	/** 
	 * 退回收件人信息(商家)
	 **/
	public $receiver_info;
	
	/** 
	 * 退回寄件人信息(消费者)
	 **/
	public $sender_info;
	
	/** 
	 * 退回仓编码
	 **/
	public $store_code;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;
	
	/** 
	 * 快递单号
	 **/
	public $tms_order_code;
	
	/** 
	 * 物流公司编码
	 **/
	public $tms_service_code;	
}
?>