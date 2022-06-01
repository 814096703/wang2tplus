<?php

/**
 * 实收单信息
 * @author auto create
 */
class ReturnOrder
{
	
	/** 
	 * 运单号
	 **/
	public $express_code;
	
	/** 
	 * 物流公司编码
	 **/
	public $logistics_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 确认入库时间
	 **/
	public $order_confirm_time;
	
	/** 
	 * 单据类型
	 **/
	public $order_type;
	
	/** 
	 * 外部业务编码
	 **/
	public $out_biz_code;
	
	/** 
	 * 商品的二维码
	 **/
	public $qr_code;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * WMS的入库单编码
	 **/
	public $return_order_code;
	
	/** 
	 * ERP系统订单编码
	 **/
	public $return_order_id;
	
	/** 
	 * 退货原因
	 **/
	public $return_reason;
	
	/** 
	 * 退件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 仓库编码
	 **/
	public $warehouse_code;	
}
?>