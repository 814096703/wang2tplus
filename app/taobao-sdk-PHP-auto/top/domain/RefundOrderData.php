<?php

/**
 * 退款单列表
 * @author auto create
 */
class RefundOrderData
{
	
	/** 
	 * 实际退款
	 **/
	public $actual_refund_amount;
	
	/** 
	 * 线下退款金额
	 **/
	public $direct_refund_amount;
	
	/** 
	 * 退款单行列表
	 **/
	public $entries;
	
	/** 
	 * 平台退款金额
	 **/
	public $guarante_refund;
	
	/** 
	 * 修改时间
	 **/
	public $modified;
	
	/** 
	 * 操作人
	 **/
	public $operator;
	
	/** 
	 * 买家支付账号
	 **/
	public $pay_account;
	
	/** 
	 * 退款金额
	 **/
	public $refund_amount;
	
	/** 
	 * erp退换单号
	 **/
	public $refund_no;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 退款结算时间
	 **/
	public $refund_time;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 旺店通系统订单号
	 **/
	public $sales_tid;
	
	/** 
	 * 平台退款单编号
	 **/
	public $src_no;
	
	/** 
	 * 类型
	 **/
	public $type;	
}
?>