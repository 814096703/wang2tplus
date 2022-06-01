<?php

/**
 * 返回结果
 * @author auto create
 */
class TopBatchResultDo
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 是否失败
	 **/
	public $failure;
	
	/** 
	 * 其它信息
	 **/
	public $other;
	
	/** 
	 * 失败的门店id
	 **/
	public $result_list;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 总条目数
	 **/
	public $total_num;	
}
?>