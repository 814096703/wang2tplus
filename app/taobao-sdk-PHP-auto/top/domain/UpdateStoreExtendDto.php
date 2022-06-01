<?php

/**
 * 更新数据
 * @author auto create
 */
class UpdateStoreExtendDto
{
	
	/** 
	 * 需要添加的TAGS
	 **/
	public $add_tags;
	
	/** 
	 * 需要修改的attribute对应的key
	 **/
	public $attribute_key;
	
	/** 
	 * 需要修改的attribute对应的value
	 **/
	public $attribute_value;
	
	/** 
	 * 需要修改的bizAttribute对应的key
	 **/
	public $biz_attribute_key;
	
	/** 
	 * 需要修改的bizAttribute对应的value
	 **/
	public $biz_attribute_value;
	
	/** 
	 * 需要删除的TAGS
	 **/
	public $remove_tags;
	
	/** 
	 * 门店id
	 **/
	public $store_id;	
}
?>