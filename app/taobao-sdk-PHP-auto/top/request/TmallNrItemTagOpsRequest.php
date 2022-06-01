<?php
/**
 * TOP API: tmall.nr.item.tag.ops request
 * 
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class TmallNrItemTagOpsRequest
{
	/** 
	 * 请求入参
	 **/
	private $tagReqDTO;
	
	private $apiParas = array();
	
	public function setTagReqDTO($tagReqDTO)
	{
		$this->tagReqDTO = $tagReqDTO;
		$this->apiParas["tag_req_d_t_o"] = $tagReqDTO;
	}

	public function getTagReqDTO()
	{
		return $this->tagReqDTO;
	}

	public function getApiMethodName()
	{
		return "tmall.nr.item.tag.ops";
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
