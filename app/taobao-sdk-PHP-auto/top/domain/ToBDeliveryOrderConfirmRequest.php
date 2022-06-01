<?php

/**
 * tob出库确认对象
 * @author auto create
 */
class ToBDeliveryOrderConfirmRequest
{
	
	/** 
	 * 到货渠道类型，VIP＝1、门店＝2、经销商＝3
	 **/
	public $arrive_channel_type;
	
	/** 
	 * 菜鸟仓作业单号
	 **/
	public $cn_order_code;
	
	/** 
	 * 出库状态，默认只有1,：全部出库
	 **/
	public $confirm_type;
	
	/** 
	 * ERP单号
	 **/
	public $delivery_order_code;
	
	/** 
	 * ERP菜鸟单号
	 **/
	public $delivery_receipt_id;
	
	/** 
	 * 发货要求
	 **/
	public $delivery_requirement;
	
	/** 
	 * 扩展字段
	 **/
	public $extend_field;
	
	/** 
	 * 发票信息
	 **/
	public $invoince_confirms;
	
	/** 
	 * 物流公司编码
	 **/
	public $logistics_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 订单出库时间
	 **/
	public $order_confirm_time;
	
	/** 
	 * 订单明细列表
	 **/
	public $order_lines;
	
	/** 
	 * 单据类型,出库单类型(JYCK=一般交易出库单;HHCK=换货出库单;BFCK=补发出库单;QTCK=其他出库单;TOBCK=TOB出库)
	 **/
	public $order_type;
	
	/** 
	 * 消息去重吗
	 **/
	public $out_biz_code;
	
	/** 
	 * 货主ID
	 **/
	public $owner_code;
	
	/** 
	 * 包裹列表
	 **/
	public $packages;
	
	/** 
	 * 店铺ID
	 **/
	public $seller_id;
	
	/** 
	 * 菜鸟仓code
	 **/
	public $store_code;
	
	/** 
	 * 时间戳
	 **/
	public $time_zone;
	
	/** 
	 * 发货仓库作业单号
	 **/
	public $warehouse_code;	
}
?>