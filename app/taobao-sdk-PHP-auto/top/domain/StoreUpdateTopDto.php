<?php

/**
 * 门店创建入参
 * @author auto create
 */
class StoreUpdateTopDto
{
	
	/** 
	 * 24小时营业
	 **/
	public $all_day;
	
	/** 
	 * 通用属性
	 **/
	public $attributes;
	
	/** 
	 * 门店认证状态
	 **/
	public $authen_status;
	
	/** 
	 * 业务属性
	 **/
	public $biz_attributes;
	
	/** 
	 * 业务身份
	 **/
	public $biz_code;
	
	/** 
	 * 类目属性
	 **/
	public $category_property_values;
	
	/** 
	 * 备注
	 **/
	public $description;
	
	/** 
	 * 门店结束营业时间
	 **/
	public $end_time;
	
	/** 
	 * 是否V3版本
	 **/
	public $is_v3;
	
	/** 
	 * 门店logo
	 **/
	public $logo;
	
	/** 
	 * 门店主类目
	 **/
	public $main_category;
	
	/** 
	 * 门店主名
	 **/
	public $name;
	
	/** 
	 * 门店外部编码
	 **/
	public $outer_code;
	
	/** 
	 * 门店头图
	 **/
	public $pic;
	
	/** 
	 * 店铺id
	 **/
	public $shop_id;
	
	/** 
	 * 标准类目ID
	 **/
	public $standard_category_id;
	
	/** 
	 * 门店开始营业时间
	 **/
	public $start_time;
	
	/** 
	 * 门店状态，枚举值。NORMAL：正常。CLOSE：关店。HOLD: 暂停营业
	 **/
	public $status;
	
	/** 
	 * 门店地址
	 **/
	public $store_adress;
	
	/** 
	 * 门店id
	 **/
	public $store_id;
	
	/** 
	 * 门店信息
	 **/
	public $store_keeper;
	
	/** 
	 * 门店类型，枚举值。NORMAL：普通门店。暂时统一使用这个值
	 **/
	public $store_type;
	
	/** 
	 * 分店名称
	 **/
	public $sub_name;
	
	/** 
	 * 星期
	 **/
	public $week;	
}
?>