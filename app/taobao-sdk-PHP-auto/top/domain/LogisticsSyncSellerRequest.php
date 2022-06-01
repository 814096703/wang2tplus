<?php

/**
 * 参数
 * @author auto create
 */
class LogisticsSyncSellerRequest
{
	
	/** 
	 * 业务类型（oneHour:一小时达,zqs:周期送,dss:定时送，周期送业务:zqs）如果自配送传入：other
	 **/
	public $biz_identity;
	
	/** 
	 * 流转节点发生时间
	 **/
	public $cancel_reason;
	
	/** 
	 * 取消配送编号
	 **/
	public $cancel_reason_code;
	
	/** 
	 * 流转节点的当前城市
	 **/
	public $city;
	
	/** 
	 * 快递业务员联系方式，手机号码或电话。
	 **/
	public $delivery_phone;
	
	/** 
	 * 快递员的姓名
	 **/
	public $delivery_user_name;
	
	/** 
	 * 运力类型，0: 第三方快递员, 1:商家自动
	 **/
	public $delivery_user_type;
	
	/** 
	 * 流转节点的详细地址及操作描述
	 **/
	public $desc;
	
	/** 
	 * 事件编码,10:已下发等待接单,20:骑手已接单，待提货,40:揽收,999:妥投,50:拒收,-999:取消
	 **/
	public $event;
	
	/** 
	 * 流转节点发生时间
	 **/
	public $event_create_time;
	
	/** 
	 * 操作人类型:1寄件人,3客服小二,4快递员,5CP,6收件人,100系统
	 **/
	public $event_oper_type;
	
	/** 
	 * 站点名称
	 **/
	public $facility_name;
	
	/** 
	 * 操作人类型:1寄件人,3客服小二,4快递员,5CP,6收件人,100系统
	 **/
	public $mail_cp;
	
	/** 
	 * 快递公司名称，自配送传入：其他
	 **/
	public $mail_cp_name;
	
	/** 
	 * 快递单号。各个快递公司的运单号格式不同。
	 **/
	public $mail_no;
	
	/** 
	 * 主订单号
	 **/
	public $main_biz_order_id;
	
	/** 
	 * 配送日期，周期送业务必传
	 **/
	public $plan_date;
	
	/** 
	 * 预计骑手到达时间
	 **/
	public $rider_predict_arrive_store_time;
	
	/** 
	 * 配送序号
	 **/
	public $sequence_no;
	
	/** 
	 * 子订单号
	 **/
	public $sub_biz_order_id;
	
	/** 
	 * 是否为周期送
	 **/
	public $zqs_sync;	
}
?>