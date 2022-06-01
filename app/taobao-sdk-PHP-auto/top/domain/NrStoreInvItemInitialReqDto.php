<?php

/**
 * 请求入参
 * @author auto create
 */
class NrStoreInvItemInitialReqDto
{
	
	/** 
	 * 操作时间
	 **/
	public $operation_time;
	
	/** 
	 * 操作者
	 **/
	public $operator;
	
	/** 
	 * 门店信息
	 **/
	public $stores;
	
	/** 
	 * 如果是品牌商家填写商家的sellerID，如果是零售商需要填写品牌商的sellerID，但是需要平台授权；
	 **/
	public $user_id;	
}
?>