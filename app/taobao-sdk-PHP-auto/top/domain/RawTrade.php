<?php

/**
 * 主单列表
 * @author auto create
 */
class RawTrade
{
	
	/** 
	 * 付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 邮费
	 **/
	public $post_amount;
	
	/** 
	 * 订单金额（不包含邮费及优惠）
	 **/
	public $receivable;
	
	/** 
	 * 收件人地址(不包含省市区)
	 **/
	public $receiver_address;
	
	/** 
	 * 收件人省市区
	 **/
	public $receiver_area;
	
	/** 
	 * 收件人手机号
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收件人
	 **/
	public $receiver_name;
	
	/** 
	 * 收件人固话
	 **/
	public $receiver_telno;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 订单编号
	 **/
	public $tid;
	
	/** 
	 * 下单时间
	 **/
	public $trade_time;	
}
?>