<?php

/**
 * 特殊路线设置信息，如果特殊路线设置传空，表名需要删除之前设置的特殊路线。最多设置10条特殊路线
 * @author auto create
 */
class SpecialRouteInfo
{
	
	/** 
	 * 特殊路线设置的物流公司，目前支持5家物流公司的特殊路线设置顺丰(SF)、EMS经济快递(EYB)、EMS标准快递(EMS)、邮政小包(POSTB)、邮政标准快递(5000000007756),特殊路线的设置必须要求特殊路线的cp在启用的物流公司中
	 **/
	public $cp_code;
	
	/** 
	 * 特殊路线到货区域
	 **/
	public $receive_area;	
}
?>