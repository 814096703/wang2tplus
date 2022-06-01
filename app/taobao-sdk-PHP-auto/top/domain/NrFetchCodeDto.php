<?php

/**
 * 实体信息
 * @author auto create
 */
class NrFetchCodeDto
{
	
	/** 
	 * 业务标识（fn/cn）
	 **/
	public $biz_type;
	
	/** 
	 * 发货公司编码
	 **/
	public $consign_company_code;
	
	/** 
	 * 发货公司名称
	 **/
	public $consign_company_name;
	
	/** 
	 * 物流cp内部的ID号
	 **/
	public $cp_out_id;
	
	/** 
	 * 面单号
	 **/
	public $face_sheet_id;
	
	/** 
	 * 取件码
	 **/
	public $fetch_code;
	
	/** 
	 * 主订单号
	 **/
	public $main_order_id;
	
	/** 
	 * 打印内容
	 **/
	public $printdata;
	
	/** 
	 * 收货地址
	 **/
	public $receive_addr;
	
	/** 
	 * 收货人名称
	 **/
	public $receive_name;
	
	/** 
	 * 收货人的手机号
	 **/
	public $receive_phone;
	
	/** 
	 * 发货详细地址
	 **/
	public $send_addr;
	
	/** 
	 * 发货城市
	 **/
	public $send_city;
	
	/** 
	 * 发货省份
	 **/
	public $send_province;
	
	/** 
	 * 对货码
	 **/
	public $short_id;
	
	/** 
	 * 菜鸟生成的标签号
	 **/
	public $tag_no;
	
	/** 
	 * 核销码
	 **/
	public $write_off_code;	
}
?>