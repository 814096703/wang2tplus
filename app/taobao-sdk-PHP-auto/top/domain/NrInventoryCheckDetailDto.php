<?php

/**
 * 失败的库存更新记录
 * @author auto create
 */
class NrInventoryCheckDetailDto
{
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * 商家商品编码
	 **/
	public $sc_item_code;
	
	/** 
	 * 后端商品的Id号
	 **/
	public $sc_item_id;
	
	/** 
	 * 幂等值
	 **/
	public $sub_order_id;	
}
?>