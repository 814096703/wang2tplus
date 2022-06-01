<?php
/**
 * TOP API: taobao.jst.sms.message.batchsend request
 * 
 * @author auto create
 * @since 1.0, 2020.08.12
 */
class JstSmsMessageBatchsendRequest
{
	/** 
	 * 批量发短信请求
	 **/
	private $sendBatchMessageRequest;
	
	private $apiParas = array();
	
	public function setSendBatchMessageRequest($sendBatchMessageRequest)
	{
		$this->sendBatchMessageRequest = $sendBatchMessageRequest;
		$this->apiParas["send_batch_message_request"] = $sendBatchMessageRequest;
	}

	public function getSendBatchMessageRequest()
	{
		return $this->sendBatchMessageRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.message.batchsend";
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
