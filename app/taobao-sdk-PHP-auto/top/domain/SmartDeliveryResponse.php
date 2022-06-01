<?php

/**
 * 智能发货引擎结果
 * @author auto create
 */
class SmartDeliveryResponse
{
	
	/** 
	 * 请求Id
	 **/
	public $object_id;
	
	/** 
	 * <a href="http://open.taobao.com/docs/doc.htm?treeId=319&articleId=106295&docType=1">智能发货引擎</a>推荐物流公司
	 **/
	public $smart_delivery_cp_info;
	
	/** 
	 * 电子面单云打印信息
	 **/
	public $waybill_cloud_print_info;	
}
?>