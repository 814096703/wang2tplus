<?php

/**
 * 收件人信息
 * @author auto create
 */
class ReceiverDto
{
	
	/** 
	 * 收件人详细地址
	 **/
	public $address;
	
	/** 
	 * 城市
	 **/
	public $city_name;
	
	/** 
	 * 区县
	 **/
	public $district_name;
	
	/** 
	 * 收件人手机号，该字段与收件人电话二者必填至少其一
	 **/
	public $mobile;
	
	/** 
	 * 收件人电话
	 **/
	public $phone;
	
	/** 
	 * 省
	 **/
	public $pro_name;
	
	/** 
	 * 收件人姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 街道
	 **/
	public $street_name;	
}
?>