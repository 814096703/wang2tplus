<?php
namespace app\controller;

use app\BaseController;

include_once(__DIR__."/../api/MyTplusSdk.php");

class TplusApi3 extends BaseController
{
    public function getCode(){
        $code = input('get.code');
        if($code){
            $res = getToken(env('TPLUS3.redirectUri'), $code, env('TPLUS3.appKey'), 'authorization_code');
            $file = 'liangchen/getToken.txt';
            file_put_contents($file, $res);
        }
        
        return $code;
    }

    public function test(){
        echo(env('TPLUS3.appKey')."\n");
        echo(env('TPLUS3.appSecret')."\n");
        // echo(getPermanentAuthCodeLocal()."\n");
        // echo(getAppAccessTokenLocal());
        $res = getTokenByPermanentCode(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), self::getOrgAccessTokenLocal(), self::get_user_auth_permanent_code());
        // $res = getAppAccessToken('111', '111', '111');
        
        // dump($res);
        $jsonRes = json_decode($res, false);
        $access_token = $jsonRes->result->access_token;

        // $inv = searchInv(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), $access_token, 'C2100064');
      
        return $access_token;
       
    }

    public function test2(){
    //   savePermanentAuthCode();
      dump(self::savePermanentAuthCode());
    }

    public function recive(){
        $encryptMsg = input('post.encryptMsg');
        $file = 'liangchen/ReciveNum.txt';
        file_put_contents($file, date('Y-m-d H:i:s').'请求成功'.PHP_EOL, FILE_APPEND);
        $key = 'camesoftQWER1234';
        if($encryptMsg){
            $decrypted = openssl_decrypt(base64_decode($encryptMsg),"AES-128-ECB",$key,OPENSSL_RAW_DATA);
            // return $decrypted;
            cache('decrypted', $decrypted, 3600);
            $res = json_decode($decrypted, false);
            $file = 'liangchen/histotyRecive.txt';
            file_put_contents($file, $decrypted.PHP_EOL, FILE_APPEND);
            switch($res->msgType){
                case "APP_TICKET":
                    cache('appTicket3', $res->bizContent->appTicket, 600);
                    break;
                case "TEMP_AUTH_CODE":
                    cache('tempAuthCode3', $res->bizContent->tempAuthCode, 600);
                    self::savePermanentAuthCode();
                    break;
            }
        }

        $resp = ['result'=>'success'];
        return json($resp);
    }

        // 获取永久用户授权码
    public static function get_user_auth_permanent_code(){
      $file = 'liangchen/getToken.txt';
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
    public static function getAppAccessTokenLocal(){
      $appAccessTokenRes = getAppAccessToken(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), cache('appTicket3'));
      // dump($appAccessTokenRes);
      $jsonRes = json_decode($appAccessTokenRes, false);
      if($jsonRes->code == '200'){
          $appAccessToken = $jsonRes->result->appAccessToken;
          return $appAccessToken;
      }
    }

    // 保存企业永久授权码的结果
    public static function savePermanentAuthCode(){
      $file = 'liangchen/PermanentAuthCode.txt';
      // cache('tempAuthCode3', 'ot-97a1bab6ac0a4b7295e3076a179becb0', 600);
      $appAccessToken = self::getAppAccessTokenLocal();
      // dump(cache('tempAuthCode3'));
      $res = getPermanentAuthCode(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), $appAccessToken, cache('tempAuthCode3'));
      file_put_contents($file, $res);
    }

    // 获取企业永久授权码
    public static function getPermanentAuthCodeLocal(){
      $file = 'liangchen/PermanentAuthCode.txt';
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
    public static function getOrgAccessTokenLocal(){
      $orgAccessToken = cache('orgAccessToken3');
      if(!$orgAccessToken){
          $res = getOrgAccessToken(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), self::getPermanentAuthCodeLocal(), self::getAppAccessTokenLocal());
          // dump($res);
          $jsonRes = json_decode($res, false);
          if($jsonRes->code == '200'){
              $orgAccessToken = $jsonRes->result->orgAccessToken;
              cache('orgAccessToken3', $orgAccessToken, 7200);
          }
      }
      // dump($orgAccessToken);
      return $orgAccessToken;
    }

    public static function getOpenToken(){
      $res = getTokenByPermanentCode(env('TPLUS3.appKey'), env('TPLUS3.appSecret'), self::getOrgAccessTokenLocal(), self::get_user_auth_permanent_code());
    //   dump($res);
      $jsonRes = json_decode($res, false);
      $access_token = $jsonRes->result->access_token;

      return $access_token;
    }
}
