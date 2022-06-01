<?php

/**
 * 批量发短信请求
 * @author auto create
 */
class SendBatchMessageRequest
{
	
	/** 
	 * 批次号
	 **/
	public $batch_number;
	
	/** 
	 * 短信扩展码，json格式
	 **/
	public $extend_num;
	
	/** 
	 * 短信接收号码，json格式，最多200个号码
	 **/
	public $rec_num;
	
	/** 
	 * 短信签名
	 **/
	public $sign_name;
	
	/** 
	 * 短信接收内容
	 **/
	public $sms_content;
	
	/** 
	 * 短信模板ID，必须为全变量模板
	 **/
	public $sms_template_code;
	
	/** 
	 * 短信tag
	 **/
	public $tag;
	
	/** 
	 * 淘宝天猫落地页
	 **/
	public $url;	
}
?>