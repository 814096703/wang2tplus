<?php

/**
 * 返回结果
 * @author auto create
 */
class UpdateResultDo
{
	
	/** 
	 * 成功数量
	 **/
	public $count;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 是否失败
	 **/
	public $failured;
	
	/** 
	 * 失败的标签id集合
	 **/
	public $failured_list;
	
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
	 * 是否请求成功
	 **/
	public $success;
	
	/** 
	 * 成功的标签id集合
	 **/
	public $success_list;
	
	/** 
	 * 请求更新的总数量(已废弃)
	 **/
	public $total_num;	
}
?>