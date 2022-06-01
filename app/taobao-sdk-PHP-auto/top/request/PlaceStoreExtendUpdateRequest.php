<?php
/**
 * TOP API: taobao.place.store.extend.update request
 * 
 * @author auto create
 * @since 1.0, 2020.06.08
 */
class PlaceStoreExtendUpdateRequest
{
	/** 
	 * 更新数据
	 **/
	private $paramUpdateStoreExtendDTO;
	
	private $apiParas = array();
	
	public function setParamUpdateStoreExtendDTO($paramUpdateStoreExtendDTO)
	{
		$this->paramUpdateStoreExtendDTO = $paramUpdateStoreExtendDTO;
		$this->apiParas["param_update_store_extend_d_t_o"] = $paramUpdateStoreExtendDTO;
	}

	public function getParamUpdateStoreExtendDTO()
	{
		return $this->paramUpdateStoreExtendDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.place.store.extend.update";
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
