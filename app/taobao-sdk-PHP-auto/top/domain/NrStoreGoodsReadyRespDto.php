<?php

/**
 * resultData
 * @author auto create
 */
class NrStoreGoodsReadyRespDto
{
	
	/** 
	 * 取消码
	 **/
	public $cancel_code;
	
	/** 
	 * 发货公司
	 **/
	public $company_name;
	
	/** 
	 * 发货单号
	 **/
	public $company_order_no;
	
	/** 
	 * 取件码
	 **/
	public $got_code;
	
	/** 
	 * 核销码
	 **/
	public $ma_code;
	
	/** 
	 * 主订单号
	 **/
	public $main_order_id;
	
	/** 
	 * 根据门店+sellerId按日期生成从1到N的数据
	 **/
	public $short_id;	
}
?>