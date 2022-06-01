<?php

/**
 * 截单结果
 * @author auto create
 */
class ApiResult
{
	
	/** 
	 * 错误码："4001":"参数无效", "4002":"截单信息不存在", "4003":"erp截单超时", "4004":"服务不可用", "4005":"需要商家授权"
	 **/
	public $error_code;
	
	/** 
	 * 错误信息，同错误码部分
	 **/
	public $error_msg;
	
	/** 
	 * 成功标识，true：成功，false：失败
	 **/
	public $success;	
}
?>