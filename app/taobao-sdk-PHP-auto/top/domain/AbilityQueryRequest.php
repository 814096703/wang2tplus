<?php

/**
 * 库容查询请求内容
 * @author auto create
 */
class AbilityQueryRequest
{
	
	/** 
	 * 品类ID
	 **/
	public $item_salecategory;
	
	/** 
	 * 查询日期
	 **/
	public $query_date;
	
	/** 
	 * 服务商品ID, 大电行业: 5000000000001,服装:5000000000012,美妆:5000000000013,电器:5000000000014,快消:5000000000059,家居:5000000011421,大件:5000000011427
	 **/
	public $service_item_id;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
?>