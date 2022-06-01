<?php

/**
 * <a href="http://open.taobao.com/docs/doc.htm?treeId=319&articleId=106295&docType=1">智能发货引擎</a>批量请求参数
 * @author auto create
 */
class SmartDeliveryBatchRequest
{
	
	/** 
	 * 电子面单信息是否需要加密 true: 加密; false: 不加密
	 **/
	public $need_encrypt;
	
	/** 
	 * 用户信息
	 **/
	public $sender;
	
	/** 
	 * 交易订单信息，数量限制为10
	 **/
	public $trade_order_info_list;	
}
?>