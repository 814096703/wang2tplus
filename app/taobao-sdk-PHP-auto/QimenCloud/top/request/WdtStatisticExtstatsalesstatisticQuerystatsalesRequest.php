<?php
/**
 * TOP API: 3ldsmu02o9.wdt.statistic.extstatsalesstatistic.querystatsales request
 * 
 * @author auto create
 * @since 1.0, 2020.07.24
 */
class WdtStatisticExtstatsalesstatisticQuerystatsalesRequest
{
	/** 
	 * 时间
	 **/
	private $datetime;
	
	/** 
	 * 分页
	 **/
	private $pager;
	
	/** 
	 * 查询参数
	 **/
	private $params;
	
	/** 
	 * 签名
	 **/
	private $wdtSign;
	
	private $apiParas = array();
	
	public function setDatetime($datetime)
	{
		$this->datetime = $datetime;
		$this->apiParas["datetime"] = $datetime;
	}

	public function getDatetime()
	{
		return $this->datetime;
	}

	public function setPager($pager)
	{
		$this->pager = $pager;
		$this->apiParas["pager"] = $pager;
	}

	public function getPager()
	{
		return $this->pager;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setWdtSign($wdtSign)
	{
		$this->wdtSign = $wdtSign;
		$this->apiParas["wdt_sign"] = $wdtSign;
	}

	public function getWdtSign()
	{
		return $this->wdtSign;
	}

	public function getApiMethodName()
	{
		return "3ldsmu02o9.wdt.statistic.extstatsalesstatistic.querystatsales";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
