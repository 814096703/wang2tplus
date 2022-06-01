<?php

/**
 * 短信发送请求
 * @author auto create
 */
class SendMessageRequest
{
	
	/** 
	 * 短信批次号
	 **/
	public $batch_number;
	
	/** 
	 * 渠道类型
	 **/
	public $channel_type;
	
	/** 
	 * 拓展信息
	 **/
	public $extend;
	
	/** 
	 * 拓展Code
	 **/
	public $extend_code;
	
	/** 
	 * 拓展Name
	 **/
	public $extend_name;
	
	/** 
	 * 短信内容参数
	 **/
	public $params;
	
	/** 
	 * 手机号码
	 **/
	public $phone_number;
	
	/** 
	 * 短信签名
	 **/
	public $sms_free_sign_name;
	
	/** 
	 * 短信类型
	 **/
	public $sms_type;
	
	/** 
	 * 短信人群tag
	 **/
	public $tag;
	
	/** 
	 * 短信模版Code
	 **/
	public $template_code;
	
	/** 
	 * 标记字段
	 **/
	public $tool_flag;
	
	/** 
	 * 商品H5详情页
	 **/
	public $url;	
}
?>