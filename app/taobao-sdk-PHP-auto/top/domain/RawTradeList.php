<?php

/**
 * 原始单信息
 * @author auto create
 */
class RawTradeList
{
	
	/** 
	 * 买家地区
	 **/
	public $buyer_area;
	
	/** 
	 * 买家邮箱
	 **/
	public $buyer_email;
	
	/** 
	 * 买家备注，若无则传''
	 **/
	public $buyer_message;
	
	/** 
	 * 买家账号
	 **/
	public $buyer_nick;
	
	/** 
	 * 货到付款金额
	 **/
	public $cod_amount;
	
	/** 
	 * 淘宝新增,物流到货时效，单位天
	 **/
	public $consign_interval;
	
	/** 
	 * 发货条件,1款到发货 2货到付款(包含部分货到付款) 3分期付款
	 **/
	public $delivery_term;
	
	/** 
	 * 优惠金额
	 **/
	public $discount;
	
	/** 
	 * 交易结束时间
	 **/
	public $end_time;
	
	/** 
	 * 货品总数量
	 **/
	public $goods_count;
	
	/** 
	 * 发票内容
	 **/
	public $invoice_content;
	
	/** 
	 * 发票抬头
	 **/
	public $invoice_title;
	
	/** 
	 * 发票类别，0 不需要，1普通发票，2增值税发票
	 **/
	public $invoice_type;
	
	/** 
	 * 是否是自流转
	 **/
	public $is_auto_wms;
	
	/** 
	 * 物流类别
	 **/
	public $logistics_type;
	
	/** 
	 * 子订单个数，原始单包含的子订单数
	 **/
	public $order_count;
	
	/** 
	 * 其他费用
	 **/
	public $other_amount;
	
	/** 
	 * 买家支付宝帐号
	 **/
	public $pay_account;
	
	/** 
	 * 平台支付订单ID
	 **/
	public $pay_id;
	
	/** 
	 * 支付方式，1在线转帐 2现金，3银行转账，4邮局汇款 5预付款 6刷卡
	 **/
	public $pay_method;
	
	/** 
	 * 退款状态，0未付款1部分付款2已付款
	 **/
	public $pay_status;
	
	/** 
	 * 支付时间
	 **/
	public $pay_time;
	
	/** 
	 * 平台费用
	 **/
	public $platform_cost;
	
	/** 
	 * 邮费
	 **/
	public $post_amount;
	
	/** 
	 * 处理状态，若为线下门店订单则统一为10。 10: 待递交，20: 已递交，30: 部分发货， 40: 已发货， 60: 已完成， 70: 已取消
	 **/
	public $process_status;
	
	/** 
	 * 应收金额
	 **/
	public $receivable;
	
	/** 
	 * 已从平台收款的金额
	 **/
	public $received;
	
	/** 
	 * 地址
	 **/
	public $receiver_address;
	
	/** 
	 * 省市区
	 **/
	public $receiver_area;
	
	/** 
	 * 收件人电话，没有传空
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收件人姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 收件人电话
	 **/
	public $receiver_telno;
	
	/** 
	 * 收件人邮编
	 **/
	public $receiver_zip;
	
	/** 
	 * 退款状态（0无退款 1申请退款 2部分退款 3全部退款）
	 **/
	public $refund_status;
	
	/** 
	 * 客服备注
	 **/
	public $remark;
	
	/** 
	 * 客服备注标记，标旗, 无则填0
	 **/
	public $remark_flag;
	
	/** 
	 * 原始单号
	 **/
	public $tid;
	
	/** 
	 * 买家要求的送货日期
	 **/
	public $to_deliver_time;
	
	/** 
	 * 平台状态，10未确认 20待尾款 30待发货 40部分发货 50已发货 60已签收 70已完成 80已退款 90已关闭(付款前取消)
	 **/
	public $trade_status;
	
	/** 
	 * 下单时间
	 **/
	public $trade_time;
	
	/** 
	 * 仓库编号
	 **/
	public $warehouse_no;	
}
?>