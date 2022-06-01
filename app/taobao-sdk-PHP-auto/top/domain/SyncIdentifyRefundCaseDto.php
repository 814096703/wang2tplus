<?php

/**
 * 请求参数
 * @author auto create
 */
class SyncIdentifyRefundCaseDto
{
	
	/** 
	 * 子订单ID
	 **/
	public $detail_order_id;
	
	/** 
	 * 扩展属性，json格式
	 **/
	public $ext_attrs;
	
	/** 
	 * 数据发生时间绝对秒数，如鉴定工单创建时间、鉴定工单完结时间
	 **/
	public $occur_time;
	
	/** 
	 * 鉴定工单操作备注
	 **/
	public $operate_tips;
	
	/** 
	 * 工单操作类型，1：开启，2：完结
	 **/
	public $operate_type;
	
	/** 
	 * 鉴定工单ID
	 **/
	public $outer_case_id;
	
	/** 
	 * 退款ID
	 **/
	public $refund_id;	
}
?>