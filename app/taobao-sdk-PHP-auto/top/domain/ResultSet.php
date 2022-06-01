<?php

/**
 * result
 * @author auto create
 */
class ResultSet
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
	 * 所抛出异常
	 **/
	public $exception;
	
	/** 
	 * 是否还有下一页
	 **/
	public $has_next;
	
	/** 
	 * 当前页面的纠纷单数量
	 **/
	public $page_results;
	
	/** 
	 * results
	 **/
	public $results;
	
	/** 
	 * 所有符合查询条件的纠纷单数量
	 **/
	public $total_results;	
}
?>