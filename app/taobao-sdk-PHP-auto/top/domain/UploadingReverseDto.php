<?php

/**
 * 销退单列表
 * @author auto create
 */
class UploadingReverseDto
{
	
	/** 
	 * 详细地址
	 **/
	public $adr;
	
	/** 
	 * 城市
	 **/
	public $city_name;
	
	/** 
	 * 国家
	 **/
	public $country_name;
	
	/** 
	 * 物流公司code
	 **/
	public $cp_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $cp_name;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 县区
	 **/
	public $district_name;
	
	/** 
	 * 扩展字段，JSONObject格式
	 **/
	public $extra;
	
	/** 
	 * 商品行列表
	 **/
	public $goods_item_d_t_o_list;
	
	/** 
	 * 销退单ID
	 **/
	public $id;
	
	/** 
	 * 运单编号
	 **/
	public $mail_no;
	
	/** 
	 * 省份
	 **/
	public $province_name;
	
	/** 
	 * 销退单状态(1=已创建；2=待入库；3=已入库，5=已取消)
	 **/
	public $status;
	
	/** 
	 * 主订单编号
	 **/
	public $tid;
	
	/** 
	 * 仓库名称
	 **/
	public $warehouse_name;	
}
?>