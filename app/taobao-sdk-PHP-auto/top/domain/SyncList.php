<?php

/**
 * 同步结果列表
 * @author auto create
 */
class SyncList
{
	
	/** 
	 * 错误信息 失败的错误信息，若成功传“”
	 **/
	public $error_msg;
	
	/** 
	 * 同步结果 0: 同步成功、-100: 还需同步，2:同步失败
	 **/
	public $status;
	
	/** 
	 * 物流同步id 在物流同步接口获取到的物流同步id
	 **/
	public $sync_id;	
}
?>