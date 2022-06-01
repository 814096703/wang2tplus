<?php

/**
 * 请求参数
 * @author auto create
 */
class SyncIdentifyRefundCaseResultDto
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
	 * 数据发生时间绝对秒数，如写入鉴定结果的时间
	 **/
	public $occur_time;
	
	/** 
	 * 鉴定工单ID
	 **/
	public $outer_case_id;
	
	/** 
	 * 退款ID
	 **/
	public $refund_id;
	
	/** 
	 * 鉴定结果提示
	 **/
	public $result_tips;
	
	/** 
	 * 结果类型，1：可退，2：可换，3：不通过
	 **/
	public $result_type;	
}
?>