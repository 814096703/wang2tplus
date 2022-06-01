<?php

/**
 * 门店的分单列表
 * @author auto create
 */
class StoreAllocatedResult
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
	 * 订单分单状态, 可选值: Waiting(仍在派单中) Allocated(派单成功) AllocateFail(派单失败)
	 **/
	public $status;
	
	/** 
	 * 店铺Id, 可能是门店或者电商仓
	 **/
	public $store_id;
	
	/** 
	 * 店铺名称
	 **/
	public $store_name;
	
	/** 
	 * 店铺类型, 门店(Store)或者电商仓(Warehouse)
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