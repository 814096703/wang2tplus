<?php

/**
 * data
 * @author auto create
 */
class SdtStatusResponse
{
	
	/** 
	 * packageId
	 **/
	public $order_id;
	
	/** 
	 * 取消原因
	 **/
	public $reason_desc;
	
	/** 
	 * 状态 0 取号，1 已发货 -1 商家取消 -2 运力端取消
	 **/
	public $status;
	
	/** 
	 * 卖家ID，通sellerID
	 **/
	public $user_id;	
}
?>