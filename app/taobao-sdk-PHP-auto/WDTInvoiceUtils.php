<?php
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");

class QimenLocalUtils{
    function isAssocArray($var)
    {
        if (!is_array($var)) {
            return false;
        }
        $arrayKeys = array_keys($var);
        $sequentialKeys = range(0, sizeof($var));
        if (function_exists('array_diff_assoc')) {
            if (array_diff_assoc($arrayKeys, $sequentialKeys)) {
                return true;
            }
        } else {
            if ((array_diff($arrayKeys, $sequentialKeys)) &&
                (array_diff($sequentialKeys, $arrayKeys))) {
                return true;
            }
        }
        return false;
    }
    function getSignedString(&$str, $json)
    {
        $decode = json_decode($json, true);
        if(is_array($decode))
        {
            if($this->isAssocArray($decode))
            {
                $map = json_decode($json, true);
                ksort($map);
				
                foreach ($map as $key => $value)
                {
                    if($key == 'wdt_sign') continue;

                    $str = $str . $key;
                    if(is_array($value))
                        $this->getSignedString($str, json_encode($value));
                    else if(is_bool($value))
                    {
                        if($value)
                            $str .= 'true';
                        else
                            $str .= 'false';
                    }
                    else
                        $str = $str . $value;
                }
            }
            else
            {
                $jsonArray = json_decode($json, true);
                foreach ($jsonArray as $value)
                {
                    $this->getSignedString($str, json_encode($value));
                }
            }
        }
        else
        {
            $str = $str . $json;
        }
    }

    function getWdtSign(&$request, $secret)
    {
        $old_wdt_secret = 'cNJpUuwbdeYmq2AMOXLt';
        if(isset($request["extendProps"]["wdt_appkey"]))
        {
            $str = '';
            $this->getSignedString($str, json_encode($request));
            $request["extendProps"]["wdt_sign"] = md5($secret.$str.$secret);
        }
        else
            $request["extendProps"]["wdt_sign"] = md5($old_wdt_secret . $request["datetime"] . $old_wdt_secret);
    }
}