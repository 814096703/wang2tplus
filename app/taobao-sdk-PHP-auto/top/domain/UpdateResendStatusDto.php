<?php

/**
 * 参数
 * @author auto create
 */
class UpdateResendStatusDto
{
	
	/** 
	 * 描述
	 **/
	public $msg;
	
	/** 
	 * erp补发单
	 **/
	public $reissue_id;
	
	/** 
	 * 平台补发单唯一标识
	 **/
	public $source_id;
	
	/** 
	 * 补发单状态（-1=关闭，1=补发成功，2=部分成功）
	 **/
	public $status;
	
	/** 
	 * 主订单
	 **/
	public $tid;	
}
?>