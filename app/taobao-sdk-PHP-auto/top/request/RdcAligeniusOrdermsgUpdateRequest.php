<?php
/**
 * TOP API: taobao.rdc.aligenius.ordermsg.update request
 * 
 * @author auto create
 * @since 1.0, 2018.09.19
 */
class RdcAligeniusOrdermsgUpdateRequest
{
	/** 
	 * 子订单（消息中传的子订单）
	 **/
	private $oid;
	
	/** 
	 * 处理状态，1=成功，2=处理失败
	 **/
	private $status;
	
	/** 
	 * 主订单（消息中传的主订单）
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.aligenius.ordermsg.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oid,"oid");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
