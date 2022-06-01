<?php

/**
 * 换出订单明细
 * @author auto create
 */
class SwapOrderDetailList
{
	
	/** 
	 * 是否残次品
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
	 * 商家编码商家编码,换出货品为组合装则此编码为组合装的商家编码
	 **/
	public $merchant_no;
	
	/** 
	 * 数量
	 **/
	public $num;
	
	/** 
	 * 原始子单号
	 **/
	public $oid;
	
	/** 
	 * 价格 零售价
	 **/
	public $price;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 规格码
	 **/
	public $spec_code;
	
	/** 
	 * 规格名称
	 **/
	public $spec_name;
	
	/** 
	 * 换出货品id
	 **/
	public $target_id;
	
	/** 
	 * 货品类型
	 **/
	public $target_type;
	
	/** 
	 * 总金额
	 **/
	public $total_amount;	
}
?>