<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.provider.create request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class WdtPurchaseProviderCreateRequest
{
	/** 
	 * 地址
	 **/
	private $address;
	
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 到货周期
	 **/
	private $arriveCycleDays;
	
	/** 
	 * 结算周期
	 **/
	private $chargeCycleDays;
	
	/** 
	 * 联系人
	 **/
	private $contact;
	
	/** 
	 * email
	 **/
	private $email;
	
	/** 
	 * 传真
	 **/
	private $fax;
	
	/** 
	 * 是否禁用
	 **/
	private $isDisabled;
	
	/** 
	 * 最后采购日期
	 **/
	private $lastPurchaseTime;
	
	/** 
	 * 最小采购数量
	 **/
	private $minPurchaseNum;
	
	/** 
	 * 手机
	 **/
	private $mobile;
	
	/** 
	 * 供应商名称
	 **/
	private $providerName;
	
	/** 
	 * 供应商编号
	 **/
	private $providerNo;
	
	/** 
	 * 采购周期
	 **/
	private $purchaseCycleDays;
	
	/** 
	 * QQ
	 **/
	private $qq;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 座机
	 **/
	private $telno;
	
	/** 
	 * 旺旺
	 **/
	private $wangwang;
	
	/** 
	 * 网址
	 **/
	private $website;
	
	/** 
	 * 邮编
	 **/
	private $zip;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
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

	public function setArriveCycleDays($arriveCycleDays)
	{
		$this->arriveCycleDays = $arriveCycleDays;
		$this->apiParas["arrive_cycle_days"] = $arriveCycleDays;
	}

	public function getArriveCycleDays()
	{
		return $this->arriveCycleDays;
	}

	public function setChargeCycleDays($chargeCycleDays)
	{
		$this->chargeCycleDays = $chargeCycleDays;
		$this->apiParas["charge_cycle_days"] = $chargeCycleDays;
	}

	public function getChargeCycleDays()
	{
		return $this->chargeCycleDays;
	}

	public function setContact($contact)
	{
		$this->contact = $contact;
		$this->apiParas["contact"] = $contact;
	}

	public function getContact()
	{
		return $this->contact;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setFax($fax)
	{
		$this->fax = $fax;
		$this->apiParas["fax"] = $fax;
	}

	public function getFax()
	{
		return $this->fax;
	}

	public function setIsDisabled($isDisabled)
	{
		$this->isDisabled = $isDisabled;
		$this->apiParas["is_disabled"] = $isDisabled;
	}

	public function getIsDisabled()
	{
		return $this->isDisabled;
	}

	public function setLastPurchaseTime($lastPurchaseTime)
	{
		$this->lastPurchaseTime = $lastPurchaseTime;
		$this->apiParas["last_purchase_time"] = $lastPurchaseTime;
	}

	public function getLastPurchaseTime()
	{
		return $this->lastPurchaseTime;
	}

	public function setMinPurchaseNum($minPurchaseNum)
	{
		$this->minPurchaseNum = $minPurchaseNum;
		$this->apiParas["min_purchase_num"] = $minPurchaseNum;
	}

	public function getMinPurchaseNum()
	{
		return $this->minPurchaseNum;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setProviderName($providerName)
	{
		$this->providerName = $providerName;
		$this->apiParas["provider_name"] = $providerName;
	}

	public function getProviderName()
	{
		return $this->providerName;
	}

	public function setProviderNo($providerNo)
	{
		$this->providerNo = $providerNo;
		$this->apiParas["provider_no"] = $providerNo;
	}

	public function getProviderNo()
	{
		return $this->providerNo;
	}

	public function setPurchaseCycleDays($purchaseCycleDays)
	{
		$this->purchaseCycleDays = $purchaseCycleDays;
		$this->apiParas["purchase_cycle_days"] = $purchaseCycleDays;
	}

	public function getPurchaseCycleDays()
	{
		return $this->purchaseCycleDays;
	}

	public function setQq($qq)
	{
		$this->qq = $qq;
		$this->apiParas["qq"] = $qq;
	}

	public function getQq()
	{
		return $this->qq;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
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

	public function setTelno($telno)
	{
		$this->telno = $telno;
		$this->apiParas["telno"] = $telno;
	}

	public function getTelno()
	{
		return $this->telno;
	}

	public function setWangwang($wangwang)
	{
		$this->wangwang = $wangwang;
		$this->apiParas["wangwang"] = $wangwang;
	}

	public function getWangwang()
	{
		return $this->wangwang;
	}

	public function setWebsite($website)
	{
		$this->website = $website;
		$this->apiParas["website"] = $website;
	}

	public function getWebsite()
	{
		return $this->website;
	}

	public function setZip($zip)
	{
		$this->zip = $zip;
		$this->apiParas["zip"] = $zip;
	}

	public function getZip()
	{
		return $this->zip;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.provider.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arriveCycleDays,"arriveCycleDays");
		RequestCheckUtil::checkNotNull($this->chargeCycleDays,"chargeCycleDays");
		RequestCheckUtil::checkNotNull($this->minPurchaseNum,"minPurchaseNum");
		RequestCheckUtil::checkNotNull($this->providerName,"providerName");
		RequestCheckUtil::checkNotNull($this->providerNo,"providerNo");
		RequestCheckUtil::checkNotNull($this->purchaseCycleDays,"purchaseCycleDays");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
