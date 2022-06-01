<?php

/**
 * 返回值包装,result为返回具体消息内容
 * @author auto create
 */
class ResultWrapper
{
	
	/** 
	 * 内容
	 **/
	public $data;
	
	/** 
	 * 请求的参数异常code
	 **/
	public $error_code;
	
	/** 
	 * 请求的参数异常
	 **/
	public $error_message;
	
	/** 
	 * 返回是否成功
	 **/
	public $success;	
}
?>