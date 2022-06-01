<?php

/**
 * 其他出库单单据
 * @author auto create
 */
class StockoutOrder
{
	
	/** 
	 * 货品详情
	 **/
	public $goods_list;
	
	/** 
	 * 物流编码
	 **/
	public $logistics_code;
	
	/** 
	 * 物流单号
	 **/
	public $logistics_no;
	
	/** 
	 * 外部单号
	 **/
	public $outer_no;
	
	/** 
	 * 邮费
	 **/
	public $post_fee;
	
	/** 
	 * 出库原因
	 **/
	public $reason;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 仓库编码
	 **/
	public $warehouse_no;	
}
?>