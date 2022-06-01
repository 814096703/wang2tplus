<?php

/**
 * data
 * @author auto create
 */
class StoreCollectConfig
{
	
	/** 
	 * 是否是活动期
	 **/
	public $activity;
	
	/** 
	 * 当activity为true时返回，活动结束时间
	 **/
	public $activity_end_time;
	
	/** 
	 * 当activity为true时返回,活动开始时间
	 **/
	public $activity_start_time;
	
	/** 
	 * 每日接单阈值
	 **/
	public $collect_threshold;
	
	/** 
	 * 接单时间段，格式为 "09:00-12:00", "" 表示一直开启
	 **/
	public $working_time;	
}
?>