<?php

/**
 * 货品信息
 * @author auto create
 */
class GoodsInfo
{
	
	/** 
	 * 别名
	 **/
	public $alias;
	
	/** 
	 * 是否自动创建品牌和分类（如果品牌,分类不存在,是否自动创建.不填默认为false）
	 **/
	public $auto_create_bc;
	
	/** 
	 * 辅助单位名称
	 **/
	public $aux_unit_name;
	
	/** 
	 * 品牌名称
	 **/
	public $brand_name;
	
	/** 
	 * 分类名称
	 **/
	public $class_name;
	
	/** 
	 * 货品标记名称
	 **/
	public $flag_name;
	
	/** 
	 * 货品名称
	 **/
	public $goods_name;
	
	/** 
	 * 货品编号
	 **/
	public $goods_no;
	
	/** 
	 * 货品类型（默认0, 1销售商品 2原材料 3包装 4周转材料5虚拟商品6固定资产 0其它）
	 **/
	public $goods_type;
	
	/** 
	 * 产地
	 **/
	public $origin;
	
	/** 
	 * 拼音
	 **/
	public $pinyin;
	
	/** 
	 * 货品自定义属性1
	 **/
	public $prop1;
	
	/** 
	 * 货品自定义属性2
	 **/
	public $prop2;
	
	/** 
	 * 货品自定义属性3
	 **/
	public $prop3;
	
	/** 
	 * 货品自定义属性4
	 **/
	public $prop4;
	
	/** 
	 * 货品自定义属性5
	 **/
	public $prop5;
	
	/** 
	 * 货品自定义属性6
	 **/
	public $prop6;
	
	/** 
	 * 货品备注
	 **/
	public $remark;
	
	/** 
	 * 简称
	 **/
	public $short_name;
	
	/** 
	 * 基本单位名称
	 **/
	public $unit_name;	
}
?>