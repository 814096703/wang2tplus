<?php

class WdtErpException extends Exception
{
	function __construct($message, $code)
	{
		parent::__construct($message, $code);
	}
}

class Pager
{
	private $pageSize = 0;
	private $pageNo = 0;
	private $calcTotal = false;
	
	function __construct($pageSize, $pageNo=0, $calcTotal=false)
	{
		$this->pageSize = $pageSize;
		$this->pageNo = $pageNo;
		$this->calcTotal = $calcTotal;
	}
	
	function getPageSize()
	{
		return $this->pageSize;
	}
	
	function getPageNo()
	{
		return $this->pageNo;
	}
	
	function getCalcTotal()
	{
		return $this->calcTotal;
	}
}

class WdtErpClient
{
	private $url = '';
	private $sid = '';
	private $key = '';
	private $secret = '';
	private $salt = '';
	private $version = '1.0';
	
	public function __construct()
	{
		$count = func_num_args();
		$args = func_get_args();
		if(method_exists($this, $f='__construct'.($count-2))){
			call_user_func_array(array($this,$f), $args);
		}else{
			throw new Exception('参数不合法');
		}
	}
	
	public function __construct1($sid, $key, $secret)
	{
		$this->sid = $sid;
		$this->key = $key;
			
		$arr = explode(':', $secret, 2);
		$this->secret = $arr[0];
		$this->salt = $arr[1];
		
		$this->url = 'http://wdt.wangdian.cn/openapi';
	}
	
	public function __construct2($url, $sid, $key, $secret)
	{
	    if (substr($url, -1) == '/')
        {
            $url = $url.'openapi';
        }
	    else
        {
            $url = $url.'/openapi';
        }
		$this->url = $url;
		$this->sid = $sid;
		$this->key = $key;
		
		$arr = explode(':', $secret, 2);
		$this->secret = $arr[0];
		$this->salt = $arr[1];
	}
	
	private function makeSign(&$req)
	{
		ksort($req);
		
		$arr = array();
		$arr[] = $this->secret;
		foreach($req as $key => $val)
		{
			if($key == 'sign') continue;
			
			$arr[] = $key;
			$arr[] = $val;
		}
		$arr[] = $this->secret;
		
		$sign = md5(implode('', $arr));
		$req['sign'] = $sign;
	}

	private function execute($method, $pager, $args)
	{
		$req = array();
		$req['sid'] = $this->sid;
		$req['key'] = $this->key;
		$req['salt'] = $this->salt;
		$req['method'] = $method;
		$req['timestamp'] = time() - 1325347200;
		$req['v'] = $this->version;
		
		if($pager != NULL)
		{
			$req['page_size'] = $pager->getPageSize();
			$req['page_no'] = $pager->getPageNo();
			$req['calc_total'] = $pager->getCalcTotal()?1:0;
		}
		
		$body = json_encode($args);
		$req['body'] = $body;
		
		$this->makeSign($req, $this->secret);
		
		unset($req['body']);
		
		$service_url = $this->url . '?' . http_build_query($req);
		
		$opts = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-Type: application/json',
				'content' => $body
			)
		);
		
		$context = stream_context_create($opts);
		
		// dump($service_url);
		// dump($context);
		$response = file_get_contents($service_url, false, $context);
		$json = json_decode($response);
		if(!$json)
		{
			throw new WdtErpException('invalid response:'.$response, 6);
		}
		
		if(isset($json->status) && $json->status>0)
		{
			throw new WdtErpException($json->message, $json->status);
		}
		
		return $json;
	}
	
	private function cacheGet($key, $secs)
    {
        $g_cache_dir = './tmp/';

        $path = $g_cache_dir . md5($key);

        $str = @file_get_contents($path);
        if (empty($str)) return NULL;

        $obj = unserialize($str);
        if (!$obj) return NULL;

        $now = time();
        if ($now - $obj['time'] > $secs) {
            @unlink($path);
            return NULL;
        }

        return $obj['val'];
    }
	
	private function cachePut($key, $val)
    {
        $g_cache_dir = './tmp/';

        if (!is_dir($g_cache_dir)) {
            @mkdir($g_cache_dir, 0777, true);
        }

        $path = $g_cache_dir . md5($key);

        $obj = array(
            'time' => time(),
            'val' => $val
        );

        file_put_contents($path, serialize($obj));
    }
	
	public function call($method)
	{
		$args = func_get_args();
		array_shift($args);
		$json = $this->execute($method, NULL, $args);
		
		return @$json->data;
	}
	
	public function pageCall($method, $pager)
	{
		$args = func_get_args();
		array_shift($args);
		array_shift($args);
		
		$json = $this->execute($method, $pager, $args);
		
		if(!$pager->getCalcTotal())
			return $json->data;
		
		return $json;
	}
	
	/*
		调用BeanShell脚本接口
	*/
	public function callEx($method)
	{
		$args = func_get_args();
		$json = $this->execute('system.ScriptExtension.call', NULL, $args);
		
		return @$json->data;
	}
}


?>