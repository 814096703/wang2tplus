<?php

/**
 * 发货策略信息
 * @author auto create
 */
class DeliveryStrategyInfo
{
	
	/** 
	 * 识别买家备注: 0-忽略, 1-识别, 2-仅识别合作cp
	 **/
	public $buyer_message_rule;
	
	/** 
	 * 合作物流公司信息
	 **/
	public $cocp_info_list;
	
	/** 
	 * 识别卖家备注: 0-忽略, 1-识别, 2-仅识别合作cp
	 **/
	public $seller_memo_rule;
	
	/** 
	 * 发货地址
	 **/
	public $send_address;
	
	/** 
	 * 特殊路线设置信息，如果特殊路线设置传空，表名需要删除之前设置的特殊路线。最多设置10条特殊路线
	 **/
	public $special_route_info_list;	
}
?>