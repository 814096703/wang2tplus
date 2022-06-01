<?php

/**
 * 逆向销退单创建请求
 * @author auto create
 */
class ReverseCreateRequest
{
	
	/** 
	 * 原正向发货履约主单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 退回订单货品信息列表
	 **/
	public $order_items;
	
	/** 
	 * ERP业务编码
	 **/
	public $out_biz_id;
	
	/** 
	 * 退回收件人信息（商家）
	 **/
	public $receiver_info;
	
	/** 
	 * 逆向类型:1=客退;2=运配异常;3=拒签退回;4=拦截退回;5=上门取退
	 **/
	public $reverse_type;
	
	/** 
	 * 退回寄件人信息（消费者）
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
	 * 运单号
	 **/
	public $tms_order_code;
	
	/** 
	 * 快递公司code.调用 taobao.logistics.companies.get 获取
	 **/
	public $tms_service_code;	
}
?>