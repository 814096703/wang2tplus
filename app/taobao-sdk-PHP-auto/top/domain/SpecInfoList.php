<?php

/**
 * 单品信息列表
 * @author auto create
 */
class SpecInfoList
{
	
	/** 
	 * 辅助单位名称
	 **/
	public $aux_unit_name;
	
	/** 
	 * 条码
	 **/
	public $barcode;
	
	/** 
	 * 货品标签
	 **/
	public $goods_label;
	
	/** 
	 * 高度
	 **/
	public $height;
	
	/** 
	 * 图片链接
	 **/
	public $img_url;
	
	/** 
	 * 质检积分
	 **/
	public $inpsect_score;
	
	/** 
	 * 是否允许低于成本（默认0,0:不允许,1 允许）
	 **/
	public $is_lower_cost;
	
	/** 
	 * 是否同一批次出库（默认0,0,不启用同一批次，1,使用同一批次）
	 **/
	public $is_single_batch;
	
	/** 
	 * 大件类型（默认0, 0非大件1普通大件2独立大件（不可和小件一起发）-1非单发件）
	 **/
	public $large_type;
	
	/** 
	 * 长度
	 **/
	public $length;
	
	/** 
	 * 最低价
	 **/
	public $lowest_price;
	
	/** 
	 * 市场价
	 **/
	public $market_price;
	
	/** 
	 * 会员价
	 **/
	public $member_price;
	
	/** 
	 * 打包积分
	 **/
	public $pack_score;
	
	/** 
	 * 拣货积分
	 **/
	public $pick_score;
	
	/** 
	 * 单品自定义属性1
	 **/
	public $prop1;
	
	/** 
	 * 单品自定义属性2
	 **/
	public $prop2;
	
	/** 
	 * 单品自定义属性3
	 **/
	public $prop3;
	
	/** 
	 * 单品自定义属性4
	 **/
	public $prop4;
	
	/** 
	 * 单品自定义属性5
	 **/
	public $prop5;
	
	/** 
	 * 单品自定义属性6
	 **/
	public $prop6;
	
	/** 
	 * 最佳收货天数
	 **/
	public $receive_days;
	
	/** 
	 * 单品备注
	 **/
	public $remark;
	
	/** 
	 * 零售价
	 **/
	public $retail_price;
	
	/** 
	 * 销售积分
	 **/
	public $sale_score;
	
	/** 
	 * 最佳销售天数
	 **/
	public $sales_days;
	
	/** 
	 * 扫描积分
	 **/
	public $scan_score;
	
	/** 
	 * 上架积分
	 **/
	public $shelve_score;
	
	/** 
	 * sn类型（默认0,0不启用序列号 1强序列号 2弱序列号）
	 **/
	public $sn_type;
	
	/** 
	 * 分拣积分
	 **/
	public $sort_score;
	
	/** 
	 * 规格码
	 **/
	public $spec_code;
	
	/** 
	 * 规格名称
	 **/
	public $spec_name;
	
	/** 
	 * 商家编码
	 **/
	public $spec_no;
	
	/** 
	 * 入库积分
	 **/
	public $stockin_score;
	
	/** 
	 * 补货积分
	 **/
	public $supply_score;
	
	/** 
	 * 税务编码
	 **/
	public $tax_code;
	
	/** 
	 * 税率
	 **/
	public $tax_rate;
	
	/** 
	 * 基本单位名称
	 **/
	public $unit_name;
	
	/** 
	 * 保质期
	 **/
	public $validity_days;
	
	/** 
	 * 重量
	 **/
	public $weight;
	
	/** 
	 * 批发价
	 **/
	public $wholesale_price;
	
	/** 
	 * 宽度
	 **/
	public $width;
	
	/** 
	 * 仓库流程
	 **/
	public $wms_process_mask;	
}
?>