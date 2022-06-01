<?php

/**
 * 包裹信息
 * @author auto create
 */
class PackageInfo
{
	
	/** 
	 * 包裹id,拆合单使用，<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#10">使用方式</a>
	 **/
	public $id;
	
	/** 
	 * 商品信息,数量限制为100
	 **/
	public $item_list;
	
	/** 
	 * 体积，单位ml
	 **/
	public $volume;
	
	/** 
	 * 重量，单位g
	 **/
	public $weight;	
}
?>