<?php

/**
 * 原始退款单列表
 * @author auto create
 */
class Orderlist
{
	
	/** 
	 * 实际退款金额
	 **/
	public $actual_refund_amount;
	
	/** 
	 * 客户网名
	 **/
	public $buyer_nick;
	
	/** 
	 * 当前状态超时时间
	 **/
	public $current_phase_timeout;
	
	/** 
	 * 平台货品id
	 **/
	public $goods_id;
	
	/** 
	 * 平台货品编号
	 **/
	public $goods_no;
	
	/** 
	 * 是否售后退款单
	 **/
	public $is_aftersale;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 物流单号
	 **/
	public $logistics_no;
	
	/** 
	 * 修改掩码,1新订单 2状态变化 4金额变化
	 **/
	public $modify_flag;
	
	/** 
	 * 货品数量
	 **/
	public $num;
	
	/** 
	 * 原始子单号
	 **/
	public $oid;
	
	/** 
	 * 买家支付帐号
	 **/
	public $pay_account;
	
	/** 
	 * 支付订单号
	 **/
	public $pay_no;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 退款原因
	 **/
	public $reason;
	
	/** 
	 * 申请退款金额
	 **/
	public $refund_amount;
	
	/** 
	 * 原始退款单号
	 **/
	public $refund_no;
	
	/** 
	 * 退款创建时间
	 **/
	public $refund_time;
	
	/** 
	 * 退款版本
	 **/
	public $refund_version;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 平台规格id
	 **/
	public $spec_id;
	
	/** 
	 * 规格编号
	 **/
	public $spec_no;
	
	/** 
	 * 平台状态,1取消退款,2已申请退款,3等待退货,4等待收货,5退款成功
	 **/
	public $status;
	
	/** 
	 * 原始单号
	 **/
	public $tid;
	
	/** 
	 * 标题
	 **/
	public $title;
	
	/** 
	 * 退款货品总价
	 **/
	public $total_amount;
	
	/** 
	 * 退款单状态,0取消订单1退款(未发货，退款申请)2退货3换货4退款不退货
	 **/
	public $type;	
}
?>