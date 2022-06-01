<?php

/**
 * 入参对象
 * @author auto create
 */
class NrTimingOrderSoldQueryReqDto
{
	
	/** 
	 * 业务标识，dss标识定时送业务；jsd表示极速达业务
	 **/
	public $biz_identity;
	
	/** 
	 * 要查询订单数据的商家的sellerID
	 **/
	public $brand_seller_id;
	
	/** 
	 * 要查询的订单创建结束时间，开始时间和结束时间之间最多相隔72小时
	 **/
	public $end_created;
	
	/** 
	 * 页码
	 **/
	public $page_no;
	
	/** 
	 * 每页大小--当前限制了20
	 **/
	public $page_size;
	
	/** 
	 * 要查询的订单创建开始时间
	 **/
	public $start_created;	
}
?>