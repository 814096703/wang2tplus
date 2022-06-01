<?php

/**
 * 入参对象
 * @author auto create
 */
class NrStoreGoodsReadyReqDto
{
	
	/** 
	 * 业务标识，dss标识定时送业务；jsd表示极速达业务
	 **/
	public $biz_identity;
	
	/** 
	 * 发货公司编码
	 **/
	public $company_code;
	
	/** 
	 * 发货公司
	 **/
	public $company_name;
	
	/** 
	 * 发货编码
	 **/
	public $company_order_no;
	
	/** 
	 * 交易主订单号
	 **/
	public $main_order_id;
	
	/** 
	 * 配送人员的姓名
	 **/
	public $performer_name;
	
	/** 
	 * 配送人员的电话
	 **/
	public $performer_phone;	
}
?>