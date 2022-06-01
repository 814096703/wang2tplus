<?php
/**
 * TOP API: qimen.taobao.qimen.entryorder.callback request
 * 
 * @author auto create
 * @since 1.0, 2017.10.10
 */
class TaobaoQimenEntryorderCallbackRequest
{
	/** 
	 * 应用在奇门申请的appkey
	 **/
	private $appkey;
	
	/** 
	 * 入库单信息列表
	 **/
	private $entryorderlist;
	
	/** 
	 * 货主在奇门授权的ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setEntryorderlist($entryorderlist)
	{
		$this->entryorderlist = $entryorderlist;
		$this->apiParas["entryorderlist"] = $entryorderlist;
	}

	public function getEntryorderlist()
	{
		return $this->entryorderlist;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["userId"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.qimen.entryorder.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
