<?php

/**
 * 子单列表
 * @author auto create
 */
class RawTradeOrder
{
	
	/** 
	 * 平台上的货品ID
	 **/
	public $goods_id;
	
	/** 
	 * 商品名称
	 **/
	public $goods_name;
	
	/** 
	 * 数量
	 **/
	public $num;
	
	/** 
	 * 子单编号(当前货品行的唯一标识)
	 **/
	public $oid;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 平台上的规格ID
	 **/
	public $spec_id;
	
	/** 
	 * 规格名称
	 **/
	public $spec_name;
	
	/** 
	 * 商家编码
	 **/
	public $spec_no;
	
	/** 
	 * 订单编号
	 **/
	public $tid;
	
	/** 
	 * 总价
	 **/
	public $total_price;	
}
?>