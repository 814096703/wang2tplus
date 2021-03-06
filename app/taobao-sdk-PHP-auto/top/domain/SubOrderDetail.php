<?php

/**
 * 子订单的详细信息列表。
 * @author auto create
 */
class SubOrderDetail
{
	
	/** 
	 * 前台分销商品的宝贝ID，不存在时为0。2015年4月15日之前创建的采购单该字段都是0。
	 **/
	public $auction_id;
	
	/** 
	 * 分销商店铺中宝贝一口价
	 **/
	public $auction_price;
	
	/** 
	 * 前台商品SKU ID，不存在时为0。2015年3月15日之前创建的采购单该字段都是0。
	 **/
	public $auction_sku_id;
	
	/** 
	 * 发票应开金额。根据买家实际付款去除邮费后，按各个子单(商品)金额比例进行分摊后的金额，仅供开发票时做票面金额参考。
	 **/
	public $bill_fee;
	
	/** 
	 * 买家订单上对应的子单零售金额，除以num（数量）后等于最终宝贝的零售价格（精确到2位小数;单位:元。如:200.07，表示:200元7分）
	 **/
	public $buyer_payment;
	
	/** 
	 * 创建时间。格式 yyyy-MM-dd HH:mm:ss 。
	 **/
	public $created;
	
	/** 
	 * 优惠活动的折扣金额
	 **/
	public $discount_fee;
	
	/** 
	 * 分销商实付金额=total_fee（分销商应付金额）+改价-优惠。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
	 **/
	public $distributor_payment;
	
	/** 
	 * Feature对象列表目前已有的属性：attr_key为 www，attr_value为1 表示是www子订单；attr_key为 wwwStoreCode，attr_value是www子订单发货的仓库编码；attr_key为 isWt，attr_value为1 表示是网厅子订单；attr_key为wtInfo,attr_value为网厅相关合约信息；attr_key为shipper,attr_value为cn表示菜鸟发货；attr_key为 storeCode，attr_value为仓库信息； attr_key为 erpHold，attr_value为1表示强管控中， attr_value为2表示分单完成；
	 **/
	public $features;
	
	/** 
	 * 分销平台的子采购单主键
	 **/
	public $fenxiao_id;
	
	/** 
	 * 子采购单id，淘宝交易主键，采购单未付款时为0.（只有支付宝 付款才有这个id，其余付款形式该字段为0）
	 **/
	public $id;
	
	/** 
	 * 分销平台上的产品id，同FenxiaoProduct 的pid
	 **/
	public $item_id;
	
	/** 
	 * 分销平台上商品商家编码。
	 **/
	public $item_outer_id;
	
	/** 
	 * 产品的采购数量。取值范围:大于零的整数
	 **/
	public $num;
	
	/** 
	 * 老的SKU属性值。如: 颜色:红色:别名;尺码:L:别名
	 **/
	public $old_sku_properties;
	
	/** 
	 * 代销采购单对应下游200订单状态。可选值：WAIT_SELLER_SEND_GOODS(已付款，待发货)WAIT_BUYER_CONFIRM_GOODS(已付款，已发货)TRADE_CLOSED(已退款成功)TRADE_REFUNDING(退款中)TRADE_FINISHED(交易成功)TRADE_CLOSED_BY_TAOBAO(交易关闭)
	 **/
	public $order200_status;
	
	/** 
	 * 产品的采购价格。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
	 **/
	public $price;
	
	/** 
	 * 优惠活动类型0=无优惠1=限时折
	 **/
	public $promotion_type;
	
	/** 
	 * 退款金额
	 **/
	public $refund_fee;
	
	/** 
	 * 后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 分销产品的SKU id。当存在时才会有值，建议使用sku_outer_id，sku_properties这两个值
	 **/
	public $sku_id;
	
	/** 
	 * SKU商家编码。
	 **/
	public $sku_outer_id;
	
	/** 
	 * SKU属性值。如: 颜色:红色:别名;尺码:L:别名
	 **/
	public $sku_properties;
	
	/** 
	 * 快照地址。
	 **/
	public $snapshot_url;
	
	/** 
	 * 交易状态。可选值： <br>WAIT_BUYER_PAY(等待付款)<br> WAIT_SELLER_SEND_GOODS(已付款，待发货）<br> WAIT_BUYER_CONFIRM_GOODS(已付款，已发货)<br> PAID_FORBID_CONSIGN(已付款，禁止发货 ps:只有大快消行业的才有)<br> TRADE_FINISHED(交易成功)<br> TRADE_CLOSED(交易关闭)<br> WAIT_BUYER_CONFIRM_GOODS_ACOUNTED(已付款（已分账），已发货。只对代销分账支持)<br> PAY_ACOUNTED_GOODS_CONFIRM （已分账发货成功）<br> PAY_WAIT_ACOUNT_GOODS_CONFIRM（已付款，确认收货）
	 **/
	public $status;
	
	/** 
	 * 商品的卖出金额调整，金额增加时为正数，金额减少时为负数，单位是分，不带小数
	 **/
	public $tc_adjust_fee;
	
	/** 
	 * 优惠金额，始终为正数，单位是分，不带小数
	 **/
	public $tc_discount_fee;
	
	/** 
	 * TC子订单ID（经销不显示）
	 **/
	public $tc_order_id;
	
	/** 
	 * 商品优惠类型：聚划算、秒杀或其他
	 **/
	public $tc_preferential_type;
	
	/** 
	 * 采购的产品标题。
	 **/
	public $title;
	
	/** 
	 * topMemoDTO
	 **/
	public $top_memo;
	
	/** 
	 * 分销商应付金额=num(采购数量)*price(采购价)。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
	 **/
	public $total_fee;	
}
?>