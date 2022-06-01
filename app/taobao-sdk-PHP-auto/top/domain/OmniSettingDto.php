<?php

/**
 * 分单&接单设置
 * @author auto create
 */
class OmniSettingDto
{
	
	/** 
	 * 接单系统，填 0 代表店掌柜，填 1 代表 POS
	 **/
	public $accepted_system;
	
	/** 
	 * 分单系统，填 astrolabe 代表阿里分单，填 RDS的 appkey 代表自行分单
	 **/
	public $allocated_system;	
}
?>