<?php
namespace app\controller;

include_once(__DIR__."/Wang.php");
// 旺店通 通用同步方法
function wdtCommonFn($st, $et, $warehouse, $order_type, $wdt_api, $tplus_api){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = $wdt_api($st, $et, $pageSize, 0, $warehouse['wh_code']);

    if($wangData->status==0){
        // $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$order_type.' '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = $wdt_api($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                }
            }
            
        }
    }else{
        $msg .= '旺店通接口错误.PHP_EOL';
    }

    return $msg;
}

// 转换订单通用方法
function transOrderCommonFn($order, $order_type){
    // 查询单据是否已转到t+
    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
    if($row && $row['status'] == '已同步') continue;

    if(!$row) $row = [
        'warehouse'=>$warehouse['wh_name'],
        'order_num'=>$order->order_no, 
        'order_detail'=>json_encode($order), 
        'order_time'=>$order->modified/1000,
        'order_type'=>'采购入库单',
        'status'=>'未同步',
        'result'=>'未同步',
    ];

    if(row['status'=='未同步']) {
        $res = w2tStockIn($order);
        if($res=='null'){
            $row['status'] = '已同步';
            $row['result'] = '已同步';
        }else{
            $row['result'] = translateErrMsg(json_decode($res)->message);
            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
        }
        Db::table('fa_order')->save($row)
    }
}

// 根据订单类型返回订单时间
function getRowByType($order_type, $order){
    $order_time = '';
    switch($order_type){
        case '采购入库单':
            $order_time = $order->modified/1000;
            break;
        case '采购入库单':
            $order_time = $order->modified/1000;
            break;
        case '采购入库单':
            $order_time = $order->modified/1000;
            break;
        case '采购入库单':
            $order_time = $order->modified/1000;
            break;
        case '采购入库单':
            $order_time = $order->modified/1000;
            break;
}
}

function w2tStockIn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        // $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            "Inventory": {
                Code: "'.$item->spec_no.'"
            },
            "Unit":{Name:"'.$item->unit_name.'"},
            "Quantity": '.$item->num.',
            
            "Price": '.$item->tax_price/1.13.',
            "Amount": '.$item->tax_amount/1.13.',
            "TaxRate": 0.13
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1001"
            },
            Partner: {
                Code: "'.$w_order->provider_no.'"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->created_time/1000).'",
            BusiType: {
                Code: "01"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // echo($content);
    $infoArr = getInfoArr($w_order->warehouse_no);
    if(count($infoArr)>0){
        $res = purchaseReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    
    
    return $res;
}