<?php

/**
 * 取消发货反馈回告请求
 * @author auto create
 */
class Consignordercancelfeedbackrequest
{
	
	/** 
	 * 履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 业务时间
	 **/
	public $biz_time;
	
	/** 
	 * 取消失败原因
	 **/
	public $cancel_reason;
	
	/** 
	 * 是否取消成功,true成功/false失败
	 **/
	public $cancel_result;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>