<?php


class WdtUtils
{
    private $QIMEN_CRM_SIGNED_FIELDS = array("pageNo", "pageSize", "fields", "extendProps", "customerid", "method", "sd_code", "startModified",
        "endModified");
//    private $QIMEN_JSON_FIELDS = array("params", "pager", "extendProps");
    private $QIMEN_EXCLUDE_SIGN_FIELDS = array('wdt3_customer_id', 'wdt_sign');

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

    function isJson($string)
    {
        return ((is_string($string) &&
            (is_object(json_decode($string)) ||
                is_array(json_decode($string))))) ? true : false;
    }

    function getSignedString(&$str, $request)
    {
        if(is_array($request))
        {
            if($this->isAssocArray($request))
            {
                ksort($request);
                foreach ($request as $key => $value)
                {
                    if (in_array($key, $this->QIMEN_EXCLUDE_SIGN_FIELDS))
                        continue;

                    $str = $str . $key;
                    if(is_array($value))
                    {
                        $this->getSignedString($str, $value);
                    }
                    else if(is_bool($value))
                    {
                        if($value)
                            $str .= 'true';
                        else
                            $str .= 'false';
                    }
                    else
                    {
//                        if (in_array($key, $this->QIMEN_JSON_FIELDS, true))
                        if ($this->isJson($value))
                        {
                            $this->getSignedString($str, json_decode($value, true));
                        }
                        else
                        {
                            $str = $str . $value;
                        }
                    }
                }
            }
            else
            {
                foreach ($request as $value)
                {
                    $this->getSignedString($str, $value);
                }
            }
        }
        else
        {
            $str = $str . $request;
        }
    }

    function getQimenCustomWdtSign(&$request, $secret)
    {
        $str = '';
        $apiParams = $request->getApiParas();
        $apiParams['method'] = $this->removeQimenCustomPrefix($request->getApiMethodName());
        $this->getSignedString($str, $apiParams);
        return md5($secret . $str . $secret);
    }

    function removeQimenCustomPrefix($method)
    {
        if(!$this->startWith($method, 'wdt.'))
            return substr($method, strpos($method, '.') + 1);
        else
            return $method;
    }

    function removeQimenOfficialPrefix($method)
    {
        if($this->startWith($method, 'qimen.'))
            return substr($method, strpos($method, '.') + 1);
        else
            return $method;
    }

    function startWith($string, $start)
    {
        $len = strlen($start);
        return (substr($string, 0, $len) === $start);
    }

    function getQimenOfficialWdtSign(&$request, $secret)
    {
        $str = '';
        $apiParams = $request->getApiParas();
        $apiParams['method'] = $this->removeQimenOfficialPrefix($request->getApiMethodName());

        foreach ($apiParams as $key => $value)
        {
            if(!in_array($key, $this->QIMEN_CRM_SIGNED_FIELDS))
            {
                unset($apiParams[$key]);
            }
        }

        $this->getSignedString($str, $apiParams);
        return md5($secret . $str . $secret);
    }
}