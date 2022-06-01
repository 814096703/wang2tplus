<?php

/**
 * data
 * @author auto create
 */
class StoreDeliverConfig
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
	public $deliver_threshold;
	
	/** 
	 * 派单时间，格式为：[{"startTime":"08:40","endTime":"12:20"},{"startTime":"18:00","endTime":"22:00"}]
	 **/
	public $dispatch_time_range;
	
	/** 
	 * 优先级，取值0-10，0优先级最大，10优先级最小
	 **/
	public $priority;
	
	/** 
	 * 接单时间段，格式为 "09:00-12:00", "" 表示一直开启
	 **/
	public $working_time;	
}
?>