<?php

/**
 * 请求体
 * @author auto create
 */
class BmsErptradeTransferConsignRequest
{
	
	/** 
	 * 操作类型(1、商家仓转菜鸟，2、菜鸟仓转商家仓)
	 **/
	public $operate_type;
	
	/** 
	 * 明细信息
	 **/
	public $order_items;
	
	/** 
	 * 货主ID
	 **/
	public $owner_user_id;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 交易号
	 **/
	public $trade_id;
	
	/** 
	 * 店铺ID
	 **/
	public $user_id;	
}
?>