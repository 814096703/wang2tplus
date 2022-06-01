<?php

/**
 * 换出订单 非换货类型不返回
 * @author auto create
 */
class SwapOrder
{
	
	/** 
	 * 店铺名称
	 **/
	public $shop_name;
	
	/** 
	 * 店铺编号
	 **/
	public $shop_no;
	
	/** 
	 * 换出订单明细
	 **/
	public $swap_order_detail_list;
	
	/** 
	 * 换出订单原始单号
	 **/
	public $tid;
	
	/** 
	 * 仓库名称
	 **/
	public $warehouse_no;	
}
?>