<?php

/**
 * Top返回对象
 * @author auto create
 */
class TopResultDo
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误描述
	 **/
	public $error_msg;
	
	/** 
	 * 是否失败
	 **/
	public $failure;
	
	/** 
	 * 返回结果：true成功；false失败
	 **/
	public $result;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 个数
	 **/
	public $total_num;	
}
?>