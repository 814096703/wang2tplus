<?php

/**
 * 调拨入库单明细信息
 * @author auto create
 */
class DetailList
{
	
	/** 
	 * 残次品
	 **/
	public $defect;
	
	/** 
	 * 调拨数量
	 **/
	public $num;
	
	/** 
	 * 调入货位调出货位，不传取系统配置的默认货位
	 **/
	public $position_no;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 单品信息
	 **/
	public $spec_no;
	
	/** 
	 * 基本单位
	 **/
	public $unit_name;	
}
?>