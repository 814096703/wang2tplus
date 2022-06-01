<?php

/**
 * resultData
 * @author auto create
 */
class NrZqsPlanRespDto
{
	
	/** 
	 * 每次配送的周期天数（在cycleType为1时生效，其它时候为空），1表示每天送，2表示隔1天送
	 **/
	public $cycle_days;
	
	/** 
	 * 配送频率类型:1-隔N天送，2-周末送，3-工作日送
	 **/
	public $cycle_type;
	
	/** 
	 * 每次配送件数
	 **/
	public $num_per_cycle;
	
	/** 
	 * 暂停/退款提前告知的天数
	 **/
	public $pause_ahead_days;
	
	/** 
	 * pauseInfos
	 **/
	public $pause_infos;
	
	/** 
	 * planList
	 **/
	public $plan_list;
	
	/** 
	 * 配送时间范围，结束时间，只取时分，HH:mm格式
	 **/
	public $send_end_time;
	
	/** 
	 * 配送时间范围，起送时间，只取时分，HH:mm格式
	 **/
	public $send_start_time;
	
	/** 
	 * 退款开始时间，注意，这个时间当天如果有配送还是会配送的，第二天开始之后的配送会取消
	 **/
	public $start_refund_date;
	
	/** 
	 * 每周几送，在cycle_type=4时生效，其它时候为空， 1表示周日，2表示周一...7表示周六（以周日为每周的第一天）
	 **/
	public $week_day;	
}
?>