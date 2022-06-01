<?php

/**
 * 门店商品，最大列表长度：20
 * @author auto create
 */
class StoreInvetoryDto
{
	
	/** 
	 * 单据流水号，用于幂等操作
	 **/
	public $bill_num;
	
	/** 
	 * CERTAINTY 表示确定性库存
	 **/
	public $inventory_type;
	
	/** 
	 * 天猫商品id
	 **/
	public $item_id;
	
	/** 
	 * 商家的外部商品编码，写入值。
	 **/
	public $outer_id;
	
	/** 
	 * 库存数量
	 **/
	public $quantity;
	
	/** 
	 * 天猫后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * sku号
	 **/
	public $sku_id;	
}
?>