<?php

/**
 * 调拨单详情
 * @author auto create
 */
class DetailsList
{
	
	/** 
	 * 辅助数量
	 **/
	public $aux_num;
	
	/** 
	 * 辅助单位名称
	 **/
	public $aux_unit_name;
	
	/** 
	 * 主条码
	 **/
	public $barcode;
	
	/** 
	 * 批次
	 **/
	public $batch_id;
	
	/** 
	 * 有效期
	 **/
	public $expire_date;
	
	/** 
	 * 货品编号
	 **/
	public $goods_no;
	
	/** 
	 * 已入库数量
	 **/
	public $in_num;
	
	/** 
	 * 数量(正数调入，负数调出，仓库单调拨只记录调出)
	 **/
	public $num;
	
	/** 
	 * 已出库数量
	 **/
	public $out_num;
	
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
	 * 商家编码
	 **/
	public $spec_no;
	
	/** 
	 * 调拨时的库存 (显示用,不做依据)
	 **/
	public $stock_num;
	
	/** 
	 * 目的货位编号
	 **/
	public $to_position;
	
	/** 
	 * 调拨单id
	 **/
	public $transfer_id;
	
	/** 
	 * 单位名称
	 **/
	public $unit_name;	
}
?>