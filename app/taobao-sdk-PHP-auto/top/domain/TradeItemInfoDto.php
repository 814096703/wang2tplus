<?php

/**
 * 商品信息，非淘及散件必填，淘系订单以订单在淘宝系统内容为准
 * @author auto create
 */
class TradeItemInfoDto
{
	
	/** 
	 * 商品单价，单位为分
	 **/
	public $amount;
	
	/** 
	 * 商品数量
	 **/
	public $count;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $name;
	
	/** 
	 * 体积，单位为升
	 **/
	public $volumn;
	
	/** 
	 * 重量，单位为克
	 **/
	public $weight;	
}
?>