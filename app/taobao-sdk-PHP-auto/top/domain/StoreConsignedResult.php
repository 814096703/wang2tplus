<?php

/**
 * 子订单列表
 * @author auto create
 */
class StoreConsignedResult
{
	
	/** 
	 * 扩展字段
	 **/
	public $attributes;
	
	/** 
	 * 0表示无系统异常
	 **/
	public $code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistic_company;
	
	/** 
	 * 物流公司code，如果id和code都填入，以code为准。点点送：DISTRIBUTOR_12006531；门店自送：DISTRIBUTOR_12709653；如果是菜鸟配送，code和company可以为空
	 **/
	public $logistic_company_code;
	
	/** 
	 * 物流公司id
	 **/
	public $logistic_id;
	
	/** 
	 * 物流单号
	 **/
	public $logistic_no;
	
	/** 
	 * 异常描述
	 **/
	public $message;
	
	/** 
	 * 操作者
	 **/
	public $operator;
	
	/** 
	 * 速店通packageId
	 **/
	public $package_id;
	
	/** 
	 * 店铺Id, 可能是门店或者电商仓
	 **/
	public $store_id;
	
	/** 
	 * 店铺名称
	 **/
	public $store_name;
	
	/** 
	 * 店铺类型, 门店(Store)或者电商仓(Warehouse)
	 **/
	public $store_type;
	
	/** 
	 * 子订单Id
	 **/
	public $sub_oid;
	
	/** 
	 * 主订单Id
	 **/
	public $tid;	
}
?>