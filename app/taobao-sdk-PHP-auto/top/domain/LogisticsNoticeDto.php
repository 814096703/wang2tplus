<?php

/**
 * 请求入参
 * @author auto create
 */
class LogisticsNoticeDto
{
	
	/** 
	 * 商品信息
	 **/
	public $commodity_infos;
	
	/** 
	 * 导入类型(1-订单拆包；2-赠品；3-补发；99-以上类型都不是可填写99)
	 **/
	public $import_type;
	
	/** 
	 * 运单号
	 **/
	public $mail_no;
	
	/** 
	 * 主交易单号
	 **/
	public $parent_order_id;
	
	/** 
	 * 快递公司编码
	 **/
	public $tp_code;	
}
?>