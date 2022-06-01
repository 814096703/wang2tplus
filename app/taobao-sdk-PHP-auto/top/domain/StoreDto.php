<?php

/**
 * 门店信息
 * @author auto create
 */
class StoreDto
{
	
	/** 
	 * 门店商品，最大列表长度：20
	 **/
	public $store_inventories;
	
	/** 
	 * 门店对应的storeID值
	 **/
	public $warehouse_id;
	
	/** 
	 * 库存来源的类型；STORE表示门店
	 **/
	public $warehouse_type;	
}
?>