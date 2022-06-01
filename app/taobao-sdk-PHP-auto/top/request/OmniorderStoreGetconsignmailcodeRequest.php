<?php
/**
 * TOP API: taobao.omniorder.store.getconsignmailcode request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniorderStoreGetconsignmailcodeRequest
{
	/** 
	 * 淘宝(TB)、天猫(TM)、京东(JD)、当当(DD)、拍拍(PP)、易讯(YX)、ebay(EBAY)、QQ网购(QQ)      、亚马逊(AMAZON)、苏宁(SN)、国美(GM)、唯品会(WPH)、聚美(JM)、乐蜂(LF)、蘑菇街(MGJ)      、聚尚(JS)、拍鞋(PX)、银泰(YT)、1号店(YHD)、凡客(VANCL)、邮乐(YL)、优购(YG)、阿里      巴巴(1688)、其他(OTHERS)
	 **/
	private $channel;
	
	/** 
	 * 收件人信息
	 **/
	private $receiver;
	
	/** 
	 * 扩展信息
	 **/
	private $sdtExtendInfoDTO;
	
	/** 
	 * 发件人联系电话，如空则表示使用门店信息中的电话号码
	 **/
	private $senderContact;
	
	/** 
	 * 门店ID
	 **/
	private $storeId;
	
	/** 
	 * 订单信息，目前一次请求只支持一个主订单
	 **/
	private $trades;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setReceiver($receiver)
	{
		$this->receiver = $receiver;
		$this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver()
	{
		return $this->receiver;
	}

	public function setSdtExtendInfoDTO($sdtExtendInfoDTO)
	{
		$this->sdtExtendInfoDTO = $sdtExtendInfoDTO;
		$this->apiParas["sdt_extend_info_d_t_o"] = $sdtExtendInfoDTO;
	}

	public function getSdtExtendInfoDTO()
	{
		return $this->sdtExtendInfoDTO;
	}

	public function setSenderContact($senderContact)
	{
		$this->senderContact = $senderContact;
		$this->apiParas["sender_contact"] = $senderContact;
	}

	public function getSenderContact()
	{
		return $this->senderContact;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function setTrades($trades)
	{
		$this->trades = $trades;
		$this->apiParas["trades"] = $trades;
	}

	public function getTrades()
	{
		return $this->trades;
	}

	public function getApiMethodName()
	{
		return "taobao.omniorder.store.getconsignmailcode";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channel,"channel");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
