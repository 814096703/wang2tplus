<?php

/**
 * 原始子单信息
 * @author auto create
 */
class RawTradeOrderList
{
	
	/** 
	 * 手工调整的优惠金额
	 **/
	public $adjust_amount;
	
	/** 
	 * 平台类目
	 **/
	public $cid;
	
	/** 
	 * 平台折扣, 不包含手工调整和分摊优惠
	 **/
	public $discount;
	
	/** 
	 * 平台货品ID
	 **/
	public $goods_id;
	
	/** 
	 * 货品名称
	 **/
	public $goods_name;
	
	/** 
	 * 货品编号
	 **/
	public $goods_no;
	
	/** 
	 * json串，若无可传空
	 **/
	public $json;
	
	/** 
	 * 数量
	 **/
	public $num;
	
	/** 
	 * 原始子单号
	 **/
	public $oid;
	
	/** 
	 * 子单类型,0正常货品 1虚拟货品 2服务
	 **/
	public $order_type;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 退款金额
	 **/
	public $refund_amount;
	
	/** 
	 * 退款状态，0无退款1取消退款,2已申请退款,3等待退货,4等待收货,5退款成功,6未付款关闭
	 **/
	public $refund_status;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 分摊折扣
	 **/
	public $share_discount;
	
	/** 
	 * 平台规格ID
	 **/
	public $spec_id;
	
	/** 
	 * 规格名称
	 **/
	public $spec_name;
	
	/** 
	 * 规格编码
	 **/
	public $spec_no;
	
	/** 
	 * 平台状态，10未确认 20待尾款 30待发货 40部分发货 50已发货 60已签收 70已完成 80已退款 90已关闭
	 **/
	public $status;
	
	/** 
	 * 原始订单号
	 **/
	public $tid;
	
	/** 
	 * 总价格
	 **/
	public $total_amount;	
}
?>