<?php
/**
 * TOP API: qimen.taobao.crm.order.sync request
 * 
 * @author auto create
 * @since 1.0, 2018.01.22
 */
class TaobaoCrmOrderSyncRequest
{
	/** 
	 * customerid
	 **/
	private $customerid;
	
	/** 
	 * 订单数据
	 **/
	private $data;
	
	/** 
	 * 数据类型（zx_order直销订单;fx_order分销订单）
	 **/
	private $dataType;
	
	/** 
	 * 数据来源ID
	 **/
	private $fromNodeId;
	
	/** 
	 * 数据来源类型（taobao淘宝;JD京东;yihaodian一号店;dangdang当当;suning苏宁易购;amazon亚马逊;yinati银泰;mogujie蘑菇街;alibaba阿里巴巴;vop唯品会;meilishuo美丽说;youzan有赞;weixin微信;other其他）
	 **/
	private $fromType;
	
	/** 
	 * 全局唯一任务编号
	 **/
	private $msgId;
	
	private $apiParas = array();
	
	public function setCustomerid($customerid)
	{
		$this->customerid = $customerid;
		$this->apiParas["customerid"] = $customerid;
	}

	public function getCustomerid()
	{
		return $this->customerid;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setDataType($dataType)
	{
		$this->dataType = $dataType;
		$this->apiParas["data_type"] = $dataType;
	}

	public function getDataType()
	{
		return $this->dataType;
	}

	public function setFromNodeId($fromNodeId)
	{
		$this->fromNodeId = $fromNodeId;
		$this->apiParas["from_node_id"] = $fromNodeId;
	}

	public function getFromNodeId()
	{
		return $this->fromNodeId;
	}

	public function setFromType($fromType)
	{
		$this->fromType = $fromType;
		$this->apiParas["from_type"] = $fromType;
	}

	public function getFromType()
	{
		return $this->fromType;
	}

	public function setMsgId($msgId)
	{
		$this->msgId = $msgId;
		$this->apiParas["msg_id"] = $msgId;
	}

	public function getMsgId()
	{
		return $this->msgId;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.crm.order.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerid,"customerid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
