<?php

/**
 * 历史状态
 * @author auto create
 */
class NrDeliveryBriefStatusDto
{
	
	/** 
	 * delivererName
	 **/
	public $deliverer_name;
	
	/** 
	 * delivererPhone
	 **/
	public $deliverer_phone;
	
	/** 
	 * failCode
	 **/
	public $fail_code;
	
	/** 
	 * failReason
	 **/
	public $fail_reason;
	
	/** 
	 * 包含[CREATE,GRASP,GOT,DELIVERYED]
	 **/
	public $logistics_status;
	
	/** 
	 * logisticsStatusName状态的说明包含[下单,接单,取件,妥投,拒收，取消]
	 **/
	public $logistics_status_name;
	
	/** 
	 * logisticsTime
	 **/
	public $logistics_time;
	
	/** 
	 * spName
	 **/
	public $sp_name;	
}
?>