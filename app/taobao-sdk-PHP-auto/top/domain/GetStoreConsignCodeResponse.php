<?php

/**
 * 发货信息
 * @author auto create
 */
class GetStoreConsignCodeResponse
{
	
	/** 
	 * 面单号
	 **/
	public $mail_no;
	
	/** 
	 * 包裹Id, 后续发货需要使用
	 **/
	public $package_id;
	
	/** 
	 * 打印机内容
	 **/
	public $print_data;
	
	/** 
	 * 菜鸟生成的标签号
	 **/
	public $tag_code;	
}
?>