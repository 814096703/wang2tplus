<?php

/**
 * 电子发票明细，erp开票默认不返回，如果erp需要获取阿里发票平台自动开票的结果，需要先找阿里小二开通权限
 * @author auto create
 */
class InvoiceItem
{
	
	/** 
	 * 价税合计。(等于sumPrice和tax之和)
	 **/
	public $amount;
	
	/** 
	 * 淘宝子订单号，阿里发票平台自动开票时才有
	 **/
	public $biz_order_id;
	
	/** 
	 * 是否为运费行，，阿里发票平台自动开票时才有
	 **/
	public $is_post_fee_row;
	
	/** 
	 * 发票项目名称（或商品名称）
	 **/
	public $item_name;
	
	/** 
	 * 税收分类编码
	 **/
	public $item_no;
	
	/** 
	 * 商品的外部系统id，如果有sku则取sku的outerId，否则取item的outerId，，阿里发票平台自动开票时才有
	 **/
	public $outer_id;
	
	/** 
	 * 单价，格式：100.00(不含税)
	 **/
	public $price;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * 发票行性质。0表示正常行，1表示折扣行，2表示被折扣行。比如充电器单价100元，折扣10元，则明细为2行，充电器行性质为2，折扣行性质为1。如果充电器没有折扣，则值应为0
	 **/
	public $row_type;
	
	/** 
	 * 规格型号,可选
	 **/
	public $specification;
	
	/** 
	 * 总价，格式：100.00(不含税)
	 **/
	public $sum_price;
	
	/** 
	 * 税额
	 **/
	public $tax;
	
	/** 
	 * 税率。税率只能为0或0.03或0.04或0.06或0.11或0.13或0.17
	 **/
	public $tax_rate;
	
	/** 
	 * 单位
	 **/
	public $unit;
	
	/** 
	 * 0税率标识，0=出口零税率，1=免税，2=不征收，3=普通零税率
	 **/
	public $zero_rate_flag;	
}
?>