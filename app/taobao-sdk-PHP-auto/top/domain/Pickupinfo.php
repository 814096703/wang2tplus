<?php

/**
 * 集货信息
 * @author auto create
 */
class Pickupinfo
{
	
	/** 
	 * 集货是否取消 Y 是,N 否
	 **/
	public $is_canceled;
	
	/** 
	 * 集货是否完成 Y 是,N 否
	 **/
	public $is_completed;
	
	/** 
	 * 集货发货单号列表（用,分隔）
	 **/
	public $pick_up_nos;	
}
?>