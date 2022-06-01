<?php

/**
 * 入参
 * @author auto create
 */
class NrInventoryUpdateReqDto
{
	
	/** 
	 * 定时送dss，jsd极速达
	 **/
	public $biz_identity;
	
	/** 
	 * 1表示全量，2表示增量
	 **/
	public $check_mode;
	
	/** 
	 * 更新库存的列表值
	 **/
	public $detail_list;
	
	/** 
	 * 幂等值
	 **/
	public $order_id;
	
	/** 
	 * 商家的sellerID，如果是零售商需要给品牌的sellerId
	 **/
	public $owner_id;
	
	/** 
	 * 门店编号
	 **/
	public $store_code;
	
	/** 
	 * 默认为6：门店库存，2：电商库存
	 **/
	public $store_type;	
}
?>