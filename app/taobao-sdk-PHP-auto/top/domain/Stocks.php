<?php

/**
 * 单据数据 库存信息列表
 * @author auto create
 */
class Stocks
{
	
	/** 
	 * 条码
	 **/
	public $barcode;
	
	/** 
	 * 品牌名称
	 **/
	public $brand_name;
	
	/** 
	 * 分类名称
	 **/
	public $class_name;
	
	/** 
	 * 是否残品
	 **/
	public $defect;
	
	/** 
	 * 货品名称
	 **/
	public $goods_name;
	
	/** 
	 * 货品编号
	 **/
	public $goods_no;
	
	/** 
	 * 可用库存数量
	 **/
	public $num;
	
	/** 
	 * 简称
	 **/
	public $short_name;
	
	/** 
	 * 规格码
	 **/
	public $spec_code;
	
	/** 
	 * 单品名称
	 **/
	public $spec_name;
	
	/** 
	 * 商家编码
	 **/
	public $spec_no;
	
	/** 
	 * 状态 0 正常 1缺货 2缺货后到货
	 **/
	public $status;
	
	/** 
	 * 类型 0正常 1待质检
	 **/
	public $type;	
}
?>