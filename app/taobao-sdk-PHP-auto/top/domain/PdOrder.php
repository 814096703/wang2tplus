<?php

/**
 * 盘点单信息
 * @author auto create
 */
class PdOrder
{
	
	/** 
	 * 正残次品处理方式:  0、全部 ; 1、只盘正品 ;  2、只盘残品
	 **/
	public $defect_mode;
	
	/** 
	 * 备注，若无可为””
	 **/
	public $remark;
	
	/** 
	 * 仓库编号
	 **/
	public $warehouse_no;	
}
?>