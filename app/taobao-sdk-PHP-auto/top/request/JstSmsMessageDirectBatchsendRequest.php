<?php
/**
 * TOP API: taobao.jst.sms.message.direct.batchsend request
 * 
 * @author auto create
 * @since 1.0, 2020.10.13
 */
class JstSmsMessageDirectBatchsendRequest
{
	/** 
	 * 短信扩展码，json格式
	 **/
	private $extendNum;
	
	/** 
	 * 短信接收号码，json格式，最多200个号码
	 **/
	private $recNum;
	
	/** 
	 * 短信签名
	 **/
	private $signName;
	
	/** 
	 * 短信内容，如果带${url}则会被入参url替换
	 **/
	private $smsContent;
	
	/** 
	 * 短信模版CODE，必须为全变量模板
	 **/
	private $smsTemplateCode;
	
	/** 
	 * 短信中带的短链
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setExtendNum($extendNum)
	{
		$this->extendNum = $extendNum;
		$this->apiParas["extend_num"] = $extendNum;
	}

	public function getExtendNum()
	{
		return $this->extendNum;
	}

	public function setRecNum($recNum)
	{
		$this->recNum = $recNum;
		$this->apiParas["rec_num"] = $recNum;
	}

	public function getRecNum()
	{
		return $this->recNum;
	}

	public function setSignName($signName)
	{
		$this->signName = $signName;
		$this->apiParas["sign_name"] = $signName;
	}

	public function getSignName()
	{
		return $this->signName;
	}

	public function setSmsContent($smsContent)
	{
		$this->smsContent = $smsContent;
		$this->apiParas["sms_content"] = $smsContent;
	}

	public function getSmsContent()
	{
		return $this->smsContent;
	}

	public function setSmsTemplateCode($smsTemplateCode)
	{
		$this->smsTemplateCode = $smsTemplateCode;
		$this->apiParas["sms_template_code"] = $smsTemplateCode;
	}

	public function getSmsTemplateCode()
	{
		return $this->smsTemplateCode;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.message.direct.batchsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->recNum,"recNum");
		RequestCheckUtil::checkNotNull($this->signName,"signName");
		RequestCheckUtil::checkNotNull($this->smsContent,"smsContent");
		RequestCheckUtil::checkNotNull($this->smsTemplateCode,"smsTemplateCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
