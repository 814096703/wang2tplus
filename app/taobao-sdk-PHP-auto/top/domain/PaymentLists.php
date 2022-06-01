<?php

/**
 * 订单支付信息列表
 * @author auto create
 */
class PaymentLists
{
	
	/** 
	 * 买家会员名
	 **/
	public $buy_name;
	
	/** 
	 * 买家支付账号
	 **/
	public $buyer_account;
	
	/** 
	 * 买家会员ID
	 **/
	public $buyer_id;
	
	/** 
	 * 支付货币类型（CNY人民币;USD美元;JPY日元;默认为CNY）
	 **/
	public $currency;
	
	/** 
	 * 实际支付金额
	 **/
	public $currency_fee;
	
	/** 
	 * 备注
	 **/
	public $memo;
	
	/** 
	 * 支付网关内部交易号
	 **/
	public $outer_no;
	
	/** 
	 * 支付金额
	 **/
	public $pay_fee;
	
	/** 
	 * 支付实际
	 **/
	public $pay_time;
	
	/** 
	 * 支付类型（online在线;offline线下;deposit预存款
	 **/
	public $pay_type;
	
	/** 
	 * 支付花费
	 **/
	public $paycost;
	
	/** 
	 * 支付方式编码
	 **/
	public $payment_code;
	
	/** 
	 * 支付单编号
	 **/
	public $payment_id;
	
	/** 
	 * 支付方式名称
	 **/
	public $payment_name;
	
	/** 
	 * 卖家收款银行
	 **/
	public $seller_bank;
	
	/** 
	 * 支付状态（succ支付成功;failed支付失败;cancel未支付;error参数异常;invalid校验错误;progress处理中;timeout超时;reday准备中）
	 **/
	public $status;
	
	/** 
	 * 支付创建时间
	 **/
	public $t_begin;
	
	/** 
	 * 支付单对应的交易ID
	 **/
	public $tid;	
}
?>