<?php

/**
 * 子订单列表
 * @author auto create
 */
class StoreAcceptedResult
{
	
	/** 
	 * 扩展字段
	 **/
	public $attributes;
	
	/** 
	 * 0表示无系统异常
	 **/
	public $code;
	
	/** 
	 * 异常描述
	 **/
	public $message;
	
	/** 
	 * 操作者
	 **/
	public $operator;
	
	/** 
	 * 店铺Id, 可能是门店或者电商仓
	 **/
	public $store_id;
	
	/** 
	 * 店铺名称
	 **/
	public $store_name;
	
	/** 
	 * 店铺类型, 门店或者电商仓
	 **/
	public $store_type;
	
	/** 
	 * 子订单Id
	 **/
	public $sub_oid;
	
	/** 
	 * 主订单Id
	 **/
	public $tid;	
}
?>