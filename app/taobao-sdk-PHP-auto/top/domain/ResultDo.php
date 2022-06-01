<?php

/**
 * 返回结果
 * @author auto create
 */
class ResultDo
{
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 是否失败
	 **/
	public $failured;
	
	/** 
	 * 完整错误信息
	 **/
	public $full_error_msg;
	
	/** 
	 * 模型
	 **/
	public $models;
	
	/** 
	 * 关键主键
	 **/
	public $pri_key;
	
	/** 
	 * 结果
	 **/
	public $result;
	
	/** 
	 * 错误码
	 **/
	public $result_code;
	
	/** 
	 * 调用是否成功
	 **/
	public $success;
	
	/** 
	 * 总数量
	 **/
	public $total_num;	
}
?>