<?php

/**
 * 统计数据（销售信息列表）
 * @author auto create
 */
class Stainfos
{
	
	/** 
	 * 异常仓库的销量
	 **/
	public $abnormal_num;
	
	/** 
	 * 销售价格
	 **/
	public $amount;
	
	/** 
	 * 均价
	 **/
	public $avg_price;
	
	/** 
	 * 佣金成本
	 **/
	public $commission;
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 此时发出订单的退款量，受后来影响
	 **/
	public $cur_refund_num;
	
	/** 
	 * 此时发出订单的退款量，受后来影响
	 **/
	public $cur_return_num;
	
	/** 
	 * 此时发出订单的换货量，受后来影响
	 **/
	public $cur_swap_num;
	
	/** 
	 * 赠品成本
	 **/
	public $gift_cost;
	
	/** 
	 * 赠品数量
	 **/
	public $gift_num;
	
	/** 
	 * 成本
	 **/
	public $goods_cost;
	
	/** 
	 * 日常销量（用于计算警戒库存，通过销售占比计算得出）
	 **/
	public $normal_num;
	
	/** 
	 * 销量
	 **/
	public $num;
	
	/** 
	 * 订单数
	 **/
	public $order_num;
	
	/** 
	 * 货品计划成本
	 **/
	public $planned_goods_cost;
	
	/** 
	 * 邮费收入
	 **/
	public $post_amount;
	
	/** 
	 * 邮费成本
	 **/
	public $post_cost;
	
	/** 
	 * 退款总金额
	 **/
	public $refund_amount;
	
	/** 
	 * 退款量
	 **/
	public $refund_num;
	
	/** 
	 * 退货金额
	 **/
	public $return_amount;
	
	/** 
	 * 退货成本
	 **/
	public $return_cost;
	
	/** 
	 * 退货量
	 **/
	public $return_num;
	
	/** 
	 * 销售日期
	 **/
	public $sales_date;
	
	/** 
	 * 店铺编号
	 **/
	public $shop_no;
	
	/** 
	 * 商家编码
	 **/
	public $spec_no;
	
	/** 
	 * 换货总金额
	 **/
	public $swap_amount;
	
	/** 
	 * 换货量
	 **/
	public $swap_num;
	
	/** 
	 * 未知成本销售金额
	 **/
	public $unknown_goods_amount;
	
	/** 
	 * 未付款量
	 **/
	public $unpay_num;
	
	/** 
	 * 仓库编号
	 **/
	public $warehouse_no;	
}
?>