<?php

/**
 * 请求入参
 * @author auto create
 */
class TagReqDto
{
	
	/** 
	 * 业务身份标识,dss定时送;FN蜂鸟,CN菜鸟
	 **/
	public $biz_identity;
	
	/** 
	 * 商品编码列表
	 **/
	public $item_ids;
	
	/** 
	 * 商家编码
	 **/
	public $seller_id;
	
	/** 
	 * 信息追踪串,用于后续排查问题,以及与外部厂商对账等场景下使用
	 **/
	public $trace_id;
	
	/** 
	 * 商品标操作类型，1:打标，2:去标
	 **/
	public $type;	
}
?>