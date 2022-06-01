<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stock.sync.by.pd request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class WdtStockSyncByPdRequest
{
	/** 
	 * API单号
	 **/
	private $apiOuterNo;
	
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 商品列表
	 **/
	private $goodsList;
	
	/** 
	 * 是否添加库存记录
	 **/
	private $isCreateStock;
	
	/** 
	 * 是否允许部分成功
	 **/
	private $isPostError;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setApiOuterNo($apiOuterNo)
	{
		$this->apiOuterNo = $apiOuterNo;
		$this->apiParas["api_outer_no"] = $apiOuterNo;
	}

	public function getApiOuterNo()
	{
		return $this->apiOuterNo;
	}

	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setGoodsList($goodsList)
	{
		$this->goodsList = $goodsList;
		$this->apiParas["goods_list"] = $goodsList;
	}

	public function getGoodsList()
	{
		return $this->goodsList;
	}

	public function setIsCreateStock($isCreateStock)
	{
		$this->isCreateStock = $isCreateStock;
		$this->apiParas["is_create_stock"] = $isCreateStock;
	}

	public function getIsCreateStock()
	{
		return $this->isCreateStock;
	}

	public function setIsPostError($isPostError)
	{
		$this->isPostError = $isPostError;
		$this->apiParas["is_post_error"] = $isPostError;
	}

	public function getIsPostError()
	{
		return $this->isPostError;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setWarehouseNo($warehouseNo)
	{
		$this->warehouseNo = $warehouseNo;
		$this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo()
	{
		return $this->warehouseNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stock.sync.by.pd";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->warehouseNo,"warehouseNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
