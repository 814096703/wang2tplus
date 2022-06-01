<?php

/**
 * 税费封装
 * @author auto create
 */
class ClearanceTaxDo
{
	
	/** 
	 * 关税，主&子
	 **/
	public $custom_duty_fee;
	
	/** 
	 * 优惠，主&子
	 **/
	public $customs_coupon_fee;
	
	/** 
	 * 保费，主&子
	 **/
	public $customs_insurance_fee;
	
	/** 
	 * 完税价，子订单
	 **/
	public $customs_sub_total_fee;
	
	/** 
	 * 完税价，主订单
	 **/
	public $customs_total_fee;
	
	/** 
	 * 消费税，主&子
	 **/
	public $excise_duty_fee;
	
	/** 
	 * 海关税收编码
	 **/
	public $hscode;
	
	/** 
	 * 税费，子订单
	 **/
	public $order_line_total_tax_fee;
	
	/** 
	 * 总税费，主订单
	 **/
	public $order_total_tax_fee;
	
	/** 
	 * 邮费，主&子
	 **/
	public $post_fee;
	
	/** 
	 * 给海关的税费中的关税，主&子
	 **/
	public $tariff_custom_fee;
	
	/** 
	 * 给海关的税费中的消费税，主&子
	 **/
	public $tariff_excise_fee;
	
	/** 
	 * 给海关的税费，主&子
	 **/
	public $tariff_fee;
	
	/** 
	 * 给海关的税费中的增值税，主&子
	 **/
	public $tariff_vat_fee;
	
	/** 
	 * 增值税，主&子
	 **/
	public $vat_fee;	
}
?>