<?php

/**
 * 单信息
 * @author auto create
 */
class Transferdetaildtolist
{
	
	/** 
	 * 出库lbx-下发仓、仓接单、部分出、全出 	 * 入库lbx-下发仓、仓接单、部分入、全入
	 **/
	public $fulfil_uni_biz_status;
	
	/** 
	 * 仓code
	 **/
	public $store_code;
	
	/** 
	 * 品基本信息
	 **/
	public $transfer_unit_order_item_list;
	
	/** 
	 * LBX订单号
	 **/
	public $unit_biz_code;
	
	/** 
	 * 1-出库单；2-入库单
	 **/
	public $unit_type;	
}
?>