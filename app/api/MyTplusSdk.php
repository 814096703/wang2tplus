<?php

function getToken($redirectUri, $code, $appKey, $grantType){
    $url = "https://openapi.chanjet.com/auth/getToken";
    $params = "?redirectUri=".$redirectUri."&code=".$code."&appKey=".$appKey."&grantType=".$grantType;
    // $curl = curl_init();
    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url.$params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function getAppAccessToken($appKey, $appSecret, $appTicket){
    $url = "https://openapi.chanjet.com/auth/appAuth/getAppAccessToken";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'Content-Type:application/json');
    $content = ['appTicket'=>$appTicket];

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function getPermanentAuthCode($appKey, $appSecret, $appAccessToken, $tempAuthCode){
    $url = "https://openapi.chanjet.com/auth/orgAuth/getPermanentAuthCode";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'Content-Type:application/json');
    $content = ['appAccessToken'=>$appAccessToken, 'tempAuthCode'=>$tempAuthCode];

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function getOrgAccessToken($appKey, $appSecret, $permanentAuthCode, $appAccessToken){
    $url = "https://openapi.chanjet.com/auth/orgAuth/getOrgAccessToken";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'Content-Type:application/json');
    $content = ['permanentAuthCode'=>$permanentAuthCode, 'appAccessToken'=>$appAccessToken];

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function getTokenByPermanentCode($appKey, $appSecret, $orgAccessToken, $userAuthPermanentCode){
    $url = "https://openapi.chanjet.com/auth/token/getTokenByPermanentCode";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'Content-Type:application/json');
    $content = ['orgAccessToken'=>$orgAccessToken, 'userAuthPermanentCode'=>$userAuthPermanentCode];

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function searchInv($appKey, $appSecret, $openToken, $code){
    $url = "https://openapi.chanjet.com/tplus/api/v2/inventory/Query";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');

    $content = '{
        "param": {
          "Code": "'.$code.'"
        }
      }';

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    return $output;
}

function createInv($appKey, $appSecret, $openToken, $detail){
    $url = "https://openapi.chanjet.com/tplus/api/v2/inventory/Create";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');

    $content = '{
        dto: {
          Code:"'.$detail['code'].'",
          Name:"'.$detail['name'].'",
          Shorthand:"'.$detail['code'].'",
          Specification:"'.$detail['itemSpe'].'",
          InventoryClass:{
            "Code":"'.$detail['invClassCode'].'",
            "Name":"'.$detail['invClassName'].'"
          },
          Unit:{
           "Code":"4",
           "Name":"支"
          },
          ProductInfo:{
          
          },
          UnitBySale:{
           "Name":"支"
          },
          UnitByRetail:{
            "Name":"支"
          },
          UnitByPurchase:{
            "Name":"支"
          },
          UnitByStock:{
            "Name":"支"
          },
          UnitByManufacture:{
            "Name":"支"
          },
          IsSingleUnit:"True",
          UnitType: {
            Code: "00"
          },
          ValueType:{
            "Code":"00"
          },
          IsPurchase:"False",
          IsSale:"True",
          IsMadeSelf:"True",
          IsMaterial:"True",
          IsSuite:"False",
          IsLaborCost:"False"
         }
      }';

    // dump($content);

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    // dump($output);
    return $output;
    // return $content;
}

function createBomSDK($appKey, $appSecret, $openToken, $content){
    $url = "https://openapi.chanjet.com/tplus/api/v2/bom/Create";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    // dump($output);
    return $output;
}

// 创建采购入库单（ST_RDRecord）
function purchaseReceiveCreate($appKey, $appSecret, $openToken, $content){
  $url = "https://openapi.chanjet.com/tplus/api/v2/purchaseReceive/Create";
    $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');
    // dump($content);
    // {
    //   dto: {
    //       ExternalCode: "10001",
    //       Code: "10001",
    //       VoucherType: {
    //           Code: "ST1001"
    //       },
    //       Partner: {
    //           Code: "0010001"
    //       },
    //       VoucherDate: "2022-01-10",
    //       BusiType: {
    //           Code: "01"
    //       },
    //       Warehouse: {
    //           Code: "01"
    //       },
    //       Memo: "测试",
    //       RDRecordDetails: [{
    //                Code:"0001",
    //               Inventory: {
    //                   Code: "wangdiantong"
    //               },
    //                Unit:{Name:"件"},
    //               Quantity: 1.00,
    //               ArrivalQuantity: 1.00,
    //               OrigAmount: 5,
    //               OrigPrice: 5,
    //               OrigTaxPrice: 5.0,
    //               OrigTaxAmount: 5.0,
    //               OrigTax: 0.0,
    //               Amount: 5,
    //               Price: 5.0,
    //               taxAmount: 5,
    //               taxPrice: 5,
    //               Tax: 0,
    //               TaxRate: 0
    //           }
    //       ]
    //   }
    // }

    $ch = curl_init();
 
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    
    //释放curl句柄
    curl_close($ch);
    // dump($output);
    return $output;
}

// 创建销售出库单
function saleDispatchCreate($appKey, $appSecret, $openToken, $content){
  $url = "https://openapi.chanjet.com/tplus/api/v2/saleDispatch/Create";
  $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');
  $ch = curl_init();
 
  //设置选项，包括URL
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  
  //执行并获取HTML文档内容
  $output = curl_exec($ch);
  
  //释放curl句柄
  curl_close($ch);
  // dump($output);
  // echo('in saleDispatchCreate');
  return $output;
}

// 创建其他入库单
function otherReceiveCreate($appKey, $appSecret, $openToken, $content){
  $url = "https://openapi.chanjet.com/tplus/api/v2/otherReceive/Create";
  $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');
  $ch = curl_init();
 
  //设置选项，包括URL
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  
  //执行并获取HTML文档内容
  $output = curl_exec($ch);
  
  //释放curl句柄
  curl_close($ch);
  // dump($output);
  return $output;
}

// 创建其他出库单
function otherDispatchCreate($appKey, $appSecret, $openToken, $content){
  $url = "https://openapi.chanjet.com/tplus/api/v2/otherDispatch/Create";
  $header = array('appKey:'.$appKey, 'appSecret:'.$appSecret, 'openToken:'.$openToken, 'Content-Type:application/json');
  $ch = curl_init();
 
  //设置选项，包括URL
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  
  //执行并获取HTML文档内容
  $output = curl_exec($ch);
  
  //释放curl句柄
  curl_close($ch);
  // dump($output);
  return $output;
}