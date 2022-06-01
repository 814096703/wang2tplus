<?php

/**
 * 查询结果
 * @author auto create
 */
class DataInfo
{
	
	/** 
	 * 可发库存
	 **/
	public $available_send_stock;
	
	/** 
	 * 条码
	 **/
	public $barcode;
	
	/** 
	 * 成本价
	 **/
	public $cost_price;
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 残次品
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
	 * 图片URL
	 **/
	public $img_url;
	
	/** 
	 * 修改时间
	 **/
	public $modified;
	
	/** 
	 * 14天销量
	 **/
	public $num14days;
	
	/** 
	 * 7天销量
	 **/
	public $num7days;
	
	/** 
	 * 总销量
	 **/
	public $num_all;
	
	/** 
	 * 月销量
	 **/
	public $num_month;
	
	/** 
	 * 待审核量
	 **/
	public $order_num;
	
	/** 
	 * 部分付款库存
	 **/
	public $part_paid_num;
	
	/** 
	 * 采购到货量
	 **/
	public $purchase_arrive_num;
	
	/** 
	 * 采购在途量
	 **/
	public $purchase_num;
	
	/** 
	 * 销售换货在途量
	 **/
	public $refund_exch_num;
	
	/** 
	 * 销售退货量
	 **/
	public $refund_num;
	
	/** 
	 * 销售退货在途量
	 **/
	public $refund_onway_num;
	
	/** 
	 * 库存备注（单品在当前仓库记录的备）
	 **/
	public $remark;
	
	/** 
	 * 采购换货量
	 **/
	public $return_exch_num;
	
	/** 
	 * 采购退货量
	 **/
	public $return_num;
	
	/** 
	 * 采购换货在途量
	 **/
	public $return_onway_num;
	
	/** 
	 * 待发货量
	 **/
	public $sending_num;
	
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
	 * 库存量
	 **/
	public $stock_num;
	
	/** 
	 * 预订单量
	 **/
	public $subscribe_num;
	
	/** 
	 * 待采购量
	 **/
	public $to_purchase_num;
	
	/** 
	 * 待调拨量
	 **/
	public $to_transfer_num;
	
	/** 
	 * 今日销量
	 **/
	public $today_num;
	
	/** 
	 * 调拨在途量
	 **/
	public $transfer_num;
	
	/** 
	 * 未付款量
	 **/
	public $unpay_num;
	
	/** 
	 * 仓库名称
	 **/
	public $warehouse_name;
	
	/** 
	 * 仓库编号
	 **/
	public $warehouse_no;
	
	/** 
	 * 仓库类型,仓库类型0为普通,非0为外部WMS
	 **/
	public $warehouse_type;
	
	/** 
	 * 重量
	 **/
	public $weight;
	
	/** 
	 * 外部WMS同  步时,占用库  存差
	 **/
	public $wms_preempty_diff;
	
	/** 
	 * 外部WMS同步时占用库存
	 **/
	public $wms_preempty_stock;
	
	/** 
	 * 库存差异
	 **/
	public $wms_stock_diff;
	
	/** 
	 * 外部库存
	 **/
	public $wms_sync_stock;	
}
?>