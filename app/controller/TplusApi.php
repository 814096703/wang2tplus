<?php
namespace app\controller;

use app\BaseController;

include_once(__DIR__."/../api/MyTplusSdk.php");

class TplusApi extends BaseController
{
    public function getCode(){
        $code = input('get.code');
        if($code){
            $res = getToken(env('TPLUS.redirectUri'), $code, env('TPLUS.appKey'), 'authorization_code');
            $file = 'getToken.txt';
            file_put_contents($file, $res);
        }
       
        return $code;
    }

    public function test(){
        echo(env('TPLUS.appKey')."\n");
        echo(env('TPLUS.appSecret')."\n");
        // echo(getPermanentAuthCodeLocal()."\n");
        // echo(getAppAccessTokenLocal());
        $res = getTokenByPermanentCode(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOrgAccessTokenLocal(), get_user_auth_permanent_code());
        // $res = getAppAccessToken('111', '111', '111');
        $appAccessToken = getAppAccessTokenLocal();
        // dump($appAccessToken);
        // dump(cache('tempAuthCode'));
        // return $res['code'];
        $jsonRes = json_decode($res, false);
        $access_token = $jsonRes->result->access_token;

        // $inv = searchInv(env('TPLUS.appKey'), env('TPLUS.appSecret'), $access_token, 'C2100064');
      
        return $access_token;
        // return $inv;
        // echo(cache('appTicket'));
        // echo('123');
        // return cache('tempAuthCode');
    }

    public function recive(){
        $encryptMsg = input('post.encryptMsg');
        $file = 'ReciveNum.txt';
        file_put_contents($file, date('Y-m-d H:i:s').'请求成功'.PHP_EOL, FILE_APPEND);
        $key = 'camesoftQWER1234';
        if($encryptMsg){
            $decrypted = openssl_decrypt(base64_decode($encryptMsg),"AES-128-ECB",$key,OPENSSL_RAW_DATA);
            // return $decrypted;
            cache('decrypted', $decrypted, 3600);
            $res = json_decode($decrypted, false);
            $file = 'histotyRecive.txt';
            file_put_contents($file, $decrypted.PHP_EOL, FILE_APPEND);
            switch($res->msgType){
                case "APP_TICKET":
                    cache('appTicket', $res->bizContent->appTicket, 600);
                    break;
                case "TEMP_AUTH_CODE":
                    cache('tempAuthCode', $res->bizContent->tempAuthCode, 600);
                    savePermanentAuthCode();
                    break;
            }
        }

        $resp = ['result'=>'success'];
        return json($resp);
    }
}

// 获取永久用户授权码
function get_user_auth_permanent_code(){
    $file = 'getToken.txt';
    if(file_exists($file)){
        $res = file_get_contents($file);
        $jsonRes = json_decode($res, false);
        
        if($jsonRes->code == '200'){
            if($jsonRes->result){
                $user_auth_permanent_code = $jsonRes->result->user_auth_permanent_code;
                return $user_auth_permanent_code;
            }
        }
    }
}

//  获取应用凭证
function getAppAccessTokenLocal(){
    $appAccessTokenRes = getAppAccessToken(env('TPLUS.appKey'), env('TPLUS.appSecret'), cache('appTicket'));
    // dump($appAccessTokenRes);
    $jsonRes = json_decode($appAccessTokenRes, false);
    if($jsonRes->code == '200'){
        $appAccessToken = $jsonRes->result->appAccessToken;
        return $appAccessToken;
    }
}

// 保存企业永久授权码的结果
function savePermanentAuthCode(){
    $file = 'PermanentAuthCode.txt';
    $appAccessToken = getAppAccessTokenLocal();
    $res = getPermanentAuthCode(env('TPLUS.appKey'), env('TPLUS.appSecret'), $appAccessToken, cache('tempAuthCode'));
    file_put_contents($file, $res);
}

// 获取企业永久授权码
function getPermanentAuthCodeLocal(){
    $file = 'PermanentAuthCode.txt';
    if(file_exists($file)){
        $res = file_get_contents($file);
        $jsonRes = json_decode($res, false);

        if($jsonRes->code == '200'){
            if($jsonRes->result){
                $permanentAuthCode = $jsonRes->result->permanentAuthCode;
                return $permanentAuthCode;
            }
        }
    }
}

// 获取企业凭证
function getOrgAccessTokenLocal(){
    $orgAccessToken = cache('orgAccessToken');
    if(!$orgAccessToken){
        $res = getOrgAccessToken(env('TPLUS.appKey'), env('TPLUS.appSecret'), getPermanentAuthCodeLocal(), getAppAccessTokenLocal());
        $jsonRes = json_decode($res, false);
        if($jsonRes->code == '200'){
            $orgAccessToken = $jsonRes->result->orgAccessToken;
            cache('orgAccessToken', $orgAccessToken, 7200);
        }
    }
    return $orgAccessToken;
}

function getOpenToken(){
    $res = getTokenByPermanentCode(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOrgAccessTokenLocal(), get_user_auth_permanent_code());
        
    $jsonRes = json_decode($res, false);
    $access_token = $jsonRes->result->access_token;

    return $access_token;
}

function createInvLocal($detail){
    return createInv(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $detail);
}

function createBom($detail){
    $content = '{
        dto: {
        "Inventory": {
          "Code": "'.$detail['code'].'"
        },
        "Unit": {
          "Name": "只"
        },
        "Version": "1",
        "ProduceQuantity": "1",
        "YieldRate": "1.00",
        
        "BOMChildDTOs": [
            {
              "Inventory": {
                "Code": "'.$detail['baseClassCode'].'"
              },
              "Unit": {
                "Name": "只"
              },
              "ChildBOM":{"Version": "1"},
              "RequiredQuantity": "1"
            } 
        ]
        }
      }';
    createBomSDK(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
}

function createCBom($detail,$others,$parentNum){
    $childInvs = '';
    $count = count($others);
    for($i=0;$i<$count;$i++){
      if($i==0){
        $childInv = '{
          "Inventory": {
            "Code": "'.$others[$i]['otherCode'].'"
          },
          "Unit": {
            "Name": "只"
          },
          "ChildBOM":{"Version": "1"},
          "RequiredQuantity": "'.$others[$i]['itemNum'].'"
        }';
      }else{
        $childInv = '{
          "Inventory": {
            "Code": "'.$others[$i]['otherCode'].'"
          },
          "Unit": {
            "Name": "只"
          },
          "RequiredQuantity": "'.$others[$i]['itemNum'].'"
        }';
      }
      
      $childInvs = $childInvs.$childInv;
      if($count>1){
        if($i<($count-1)){
          $childInvs = $childInvs.',';
        }
      }
      
    }
    // echo $childInvs;
    $content = '{
        dto: {
        "Inventory": {"Code": "'.$detail['code'].'"},
        "Unit": {"Name": "只"},
        
        "Version": "1",
        "ProduceQuantity": "'.$parentNum.'",
        "YieldRate": "1.00",
        
        "BOMChildDTOs": [
            '.$childInvs.'
        ]
        }
    }';
    createBomSDK(env('TPLUS.appKey'), env('TPLUS.appSecret'), getOpenToken(), $content);
  }