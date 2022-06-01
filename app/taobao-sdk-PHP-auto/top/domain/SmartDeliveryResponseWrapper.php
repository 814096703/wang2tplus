<?php

/**
 * <a href="http://open.taobao.com/docs/doc.htm?treeId=319&articleId=106295&docType=1">智能发货引擎</a>结果包装类
 * @author auto create
 */
class SmartDeliveryResponseWrapper
{
	
	/** 
	 * <a href="http://open.taobao.com/docs/doc.htm?spm=a219a.7629140.0.0.9mPrfc&treeId=319&articleId=106307&docType=1">错误码</a>
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 智能发货引擎结果
	 **/
	public $smart_delivery_response;
	
	/** 
	 * 如果是电子面单错误，会返回电子面单错误信息列表。没有错误不返回
	 **/
	public $sub_error_info_list;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>