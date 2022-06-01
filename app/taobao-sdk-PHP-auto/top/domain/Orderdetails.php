<?php

/**
 * 单据明细
 * @author auto create
 */
class Orderdetails
{
	
	/** 
	 * 批次
	 **/
	public $batch_no;
	
	/** 
	 * 是否残次品(默认false)
	 **/
	public $defect;
	
	/** 
	 * 有效期
	 **/
	public $expire_date;
	
	/** 
	 * 数量
	 **/
	public $num;
	
	/** 
	 * 货位
	 **/
	public $position_no;
	
	/** 
	 * 商家编码
	 **/
	public $spec_no;	
}
?>