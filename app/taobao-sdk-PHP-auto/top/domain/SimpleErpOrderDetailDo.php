<?php

/**
 * 录入ERP数据列表
 * @author auto create
 */
class SimpleErpOrderDetailDo
{
	
	/** 
	 * 异常状态
	 **/
	public $abnormal_status;
	
	/** 
	 * 活动状态
	 **/
	public $activity_status;
	
	/** 
	 * 审核状态
	 **/
	public $audit_status;
	
	/** 
	 * 买家nick
	 **/
	public $buyer_nick;
	
	/** 
	 * 扩展信息
	 **/
	public $extend_info;
	
	/** 
	 * 主订单id
	 **/
	public $main_order_id;
	
	/** 
	 * 退货状态
	 **/
	public $return_status;
	
	/** 
	 * 卖家nick
	 **/
	public $seller_nick;
	
	/** 
	 * 拆单状态
	 **/
	public $seperate_status;
	
	/** 
	 * 子订单id
	 **/
	public $sub_order_id;
	
	/** 
	 * 仓库状态
	 **/
	public $warehouse_status;	
}
?>