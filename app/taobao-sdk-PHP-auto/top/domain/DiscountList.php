<?php

/**
 * 优惠信息（不需要优惠明细可不传,优惠明细显示在订单管理界面的优惠明细Tab页）
 * @author auto create
 */
class DiscountList
{
	
	/** 
	 * 优惠金额
	 **/
	public $amount;
	
	/** 
	 * 优惠详情
	 **/
	public $detail;
	
	/** 
	 * 是否优惠券
	 **/
	public $is_bonus;
	
	/** 
	 * 优惠名称
	 **/
	public $name;
	
	/** 
	 * 原始子单号
	 **/
	public $oid;
	
	/** 
	 * 唯一编号
	 **/
	public $sn;
	
	/** 
	 * 原始订单号
	 **/
	public $tid;
	
	/** 
	 * 类型
	 **/
	public $type;	
}
?>