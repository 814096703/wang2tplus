<?php

/**
 * 发货主单信息
 * @author auto create
 */
class Erpnormalconsignorderrequest
{
	
	/** 
	 * 发货子单信息
	 **/
	public $consign_order_item_list;
	
	/** 
	 * 发货单号（Erp单号）
	 **/
	public $delivery_order_code;
	
	/** 
	 * 发货时间 格式 yyyy-MM-dd HH:mm:ss
	 **/
	public $delivery_time;
	
	/** 
	 * 末端服务类型 1:配送 2:自提
	 **/
	public $end_service_type;
	
	/** 
	 * 干线运单号
	 **/
	public $express_code;
	
	/** 
	 * 扩展字段JSON串 twoStageTms:是否二段单 0 否 ,1 是
	 **/
	public $feature;
	
	/** 
	 * 物流公司编码，SF=顺丰、EMS=标准快递、EYB=经济快件、ZJS=宅急送、YTO=圆通 、ZTO=中通 (ZTO) 、HTKY=百世汇通、UC=优速、STO=申通、TTKDEX=天天快递 、QFKD=全峰、FAST=快捷、POSTB=邮政小包 、GTO=国通、YUNDA=韵达、JD=京东配送、DD=当当宅配、OTHER=其他
	 **/
	public $logistics_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 物流订单服务类型 1:末端送装/2:干线加送装/3:仓干配
	 **/
	public $lp_service_type;
	
	/** 
	 * 操作时间 格式 yyyy-MM-dd HH:mm:ss
	 **/
	public $operate_time;
	
	/** 
	 * 操作人
	 **/
	public $operator;
	
	/** 
	 * 集货信息
	 **/
	public $pick_up_info;
	
	/** 
	 * 收件人信息
	 **/
	public $receiver_info;
	
	/** 
	 * 退货人信息
	 **/
	public $refunder_info;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 店铺id
	 **/
	public $shop_id;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_nick;
	
	/** 
	 * 订单来源平台编码,TB= 淘宝 、TM=天猫 、JD=京东、DD=当当、PP=拍拍、YX=易讯、EBAY=ebay、QQ=QQ网购、AMAZON=亚马逊、SN=苏宁、GM=国美、WPH=唯品会、JM=聚美、LF=乐蜂、MGJ=蘑菇街、JS=聚尚、PX=拍鞋、YT=银泰、YHD=1号店、VANCL=凡客、YL=邮乐、YG=优购、1688=阿里巴巴、POS=POS门店、PDD=拼多多、RRSLJ=日日顺乐家、MSJ=美食杰、UGO=优品购、OTHER=其他
	 **/
	public $source_platform_code;	
}
?>