<?php

/**
 * 家装物流-发货参数
 * @author auto create
 */
class JzTopArgsDto
{
	
	/** 
	 * 运单号,用快递或商家自有发货时,必填
	 **/
	public $mail_no;
	
	/** 
	 * 包裹数量
	 **/
	public $package_number;
	
	/** 
	 * 包裹备注
	 **/
	public $package_remark;
	
	/** 
	 * 包裹体积
	 **/
	public $package_volume;
	
	/** 
	 * 包裹重量
	 **/
	public $package_weight;
	
	/** 
	 * 自有物流公司名称
	 **/
	public $zy_company;
	
	/** 
	 * 自有物流发货时间,时间不能早于当前时间
	 **/
	public $zy_consign_time;
	
	/** 
	 * 自有物流公司电话
	 **/
	public $zy_phone_number;	
}
?>