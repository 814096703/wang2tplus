<?php

/**
 * 清关信息对象
 * @author auto create
 */
class ConsigneeCertifyInfo
{
	
	/** 
	 * 身份证正面
	 **/
	public $credential1;
	
	/** 
	 * 身份证背面
	 **/
	public $credential2;
	
	/** 
	 * 有效期截止日期
	 **/
	public $ocr_exp;
	
	/** 
	 * 身份证号
	 **/
	public $ocr_id;
	
	/** 
	 * 姓名
	 **/
	public $ocr_name;
	
	/** 
	 * 订单号
	 **/
	public $order_id;
	
	/** 
	 * 证件类型
	 **/
	public $type;	
}
?>