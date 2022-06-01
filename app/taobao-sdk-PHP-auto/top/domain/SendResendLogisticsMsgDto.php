<?php

/**
 * 参数
 * @author auto create
 */
class SendResendLogisticsMsgDto
{
	
	/** 
	 * 发货单唯一标识
	 **/
	public $biz_id;
	
	/** 
	 * 物流公司名称
	 **/
	public $company_name;
	
	/** 
	 * 该运单所包含的货品列表
	 **/
	public $goods_item_list;
	
	/** 
	 * 运单号
	 **/
	public $mail_no;
	
	/** 
	 * 描述
	 **/
	public $msg;
	
	/** 
	 * 成功发货的发货单运单号，菜鸟为LP单号
	 **/
	public $order_code;
	
	/** 
	 * 平台补发单唯一标识
	 **/
	public $source_id;
	
	/** 
	 * 运单状态（-1=废单，1=已下发）
	 **/
	public $status;
	
	/** 
	 * 主订单
	 **/
	public $tid;	
}
?>