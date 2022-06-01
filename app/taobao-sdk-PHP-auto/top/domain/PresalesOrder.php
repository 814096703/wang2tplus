<?php

/**
 * 预售订单信息
 * @author auto create
 */
class PresalesOrder
{
	
	/** 
	 * 预售订单开始发货时间
	 **/
	public $begin_consign_date;
	
	/** 
	 * 是否可下沉
	 **/
	public $is_sink;
	
	/** 
	 * 预售订单最晚发货时间
	 **/
	public $latest_consign_date;
	
	/** 
	 * 配送公司编码
	 **/
	public $logistics_code;
	
	/** 
	 * 货主编码
	 **/
	public $owner_code;
	
	/** 
	 * 出库单号
	 **/
	public $presales_order_code;
	
	/** 
	 * 菜鸟的订单号
	 **/
	public $presales_order_id;	
}
?>