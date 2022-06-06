<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\helper\Arr;

include_once(__DIR__."/../api/wdtsdk.php");
include_once(__DIR__."/Wang.php");
include_once(__DIR__."/../api/MyTplusSdk.php");
include_once(__DIR__."/TplusApi.php");
include_once(__DIR__."/TplusApi2.php");
include_once(__DIR__."/TplusApi3.php");
include_once(__DIR__."/../api/util.php");

class Index extends BaseController
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function test(){
        // $range =  stockIn('2022-06-01 00:00:00', '2022-06-01 23:59:59', '12');
        
        $range = dealStockInTransfer('2022-06-01 00:00:00', '2022-06-06 00:00:00');
        // $range = dealStockOutTransfer('2022-06-01 00:00:00', '2022-06-04 00:00:00', $warehouse);
        // $range =  stockOut('2022-04-01 00:00:00', '2022-04-10 00:00:00');
        
        dump($range);
        
        // echo date("Y-m-d H:i:s", strtotime('2022-02-11'));
        // addWh();
        // $warehouseArr = Db::table('fa_warehouse')->select();
        // dump($warehouseArr);
        // foreach($warehouseArr as $warehouse){
        //     echo $warehouse['wh_code'].'\n';
        // }
    }

    public function startStockIn(){
        
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $warehouse){
                    $msg.=stockIn($rangeTime['start'], $rangeTime['end'], $warehouse);
                    sleep(1);
                }
                
            }
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

    public function startDealStockInOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockInOther($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockInPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockInPd($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(2);
                }
            }
            return $msg;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockInTransfer(){
        
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                
                $msg.=dealStockInTransfer($rangeTime['start'], $rangeTime['end']);
                sleep(1);
                
            }
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startStockOut(){

        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $endTime = date("Y-m-d H:i:s", strtotime("$endTime - 1 days"));
            // echo $startTime;
            // echo $endTime;
            foreach($warehouseArr as $wh){
                $res = stockOut($startTime, $endTime, $wh);
            }
            
            return $res;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutOther($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            // return dealStockOutOther($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutPd($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(2);
                }
            }
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    public function startDealStockOutTransfer(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $rangeTimeArr = getRangeTimeArr($startTime, $endTime);
            $msg = '';
            foreach($rangeTimeArr as $rangeTime){
                foreach($warehouseArr as $wh){
                    $msg.=dealStockOutTransfer($rangeTime['start'], $rangeTime['end'], $wh);
                    sleep(1);
                }
            }
            return $msg;
            // return dealStockOutTransfer($startTime, $endTime);
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }

}

function addWh(){
    $wh_name_str = '京东-上海商超B牛奶水饮仓4号库,
        京东-广州公共平台仓7号库,
        京东-德州商超B牛奶水饮仓3号库,
        京东-北京商超B牛奶水饮仓10号库,
        京东-北京服装仓10号库,
        京东-武汉公共平台仓16号库,
        京东-上海服装仓2号库,
        京东-西安公共平台仓2号库,
        京东-上海商超B牛奶水饮4号库,
        京东-武汉商超B母婴玩具仓2号库,
        京东-成都商超A休闲食品仓3号库,
        京东-成都公共平台仓3号库,
        京东-上海公共平台仓13号库,
        京东-广州公共平台仓14号库,
        京东-沈阳-商超B牛奶水饮仓2号库,
        京东-西安-商超B仓1号库,
        京东-沈阳商超B牛奶水饮仓2号库,
        京东-西安商超B仓1号库,
        京东-德州商超B牛奶水饮仓3号库-致中和,
        京东-成都亚一商超B牛奶水饮仓2号库,
        京东-上海商超B牛奶水饮仓1号库,
        京东-上海商超B牛奶水饮仓5号库,
        京东-广州商超B牛奶水饮仓1号库（新）,
        京东-广州商超B牛奶水饮仓7号库,
        京东-北京商超B牛奶水饮仓5号库,
        京东-北京公共平台仓20号库,
        京东-北京公共平台仓17号库,
        京东-武汉-商超B米面粮油仓2号库,
        菜鸟-华中武汉标准7号仓,
        菜鸟-华南东莞标准4号仓,
        菜鸟-东北沈阳标准5号仓,
        菜鸟-华北天津标准21号仓,
        菜鸟-华东桐乡标准1号仓,
        菜鸟-西北西安标准3号仓,
        菜鸟-西南成都标准5号仓,
        萧山仓-滞销仓,
        萧山仓-残次品仓';
    $wh_code_str = '110025420,
        110007718,
        110024008,
        110025428,
        110021762,
        118064266,
        110007127,
        110007316,
        110008258,
        101,
        128,
        110008141,
        110008435,
        110009010,
        110008173,
        110009210,
        42,
        62,
        102,
        138,
        145,
        147,
        316,
        317,
        331,
        110008427,
        110009123,
        5-102,
        XGN201,
        DGM205,
        SHE206,
        TSN241,
        TOX201,
        XIY204,
        CTU210,
        04,
        03';
    $name_arr = explode(',', $wh_name_str);
    $code_arr = explode(',', $wh_code_str);
    $size = count($name_arr);
    
    for($index=0; $index<$size; $index++){
        $row = [
            'wh_type'=>'公共仓', 
            'wh_name'=>trim($name_arr[$index]), 
            'wh_code'=>trim($code_arr[$index])
        ];
        Db::table('fa_warehouse')->insert($row);
    }
}

function getInfoArr($warehouse_no){
    // 仓库编码查找仓库
    $warehouse = Db::table('fa_warehouse')
        ->where('wh_code', $warehouse_no)
        ->where('wh_type', '账套仓')
        ->find();
    
    $infoArr = [];
    
    // 判断是否为账套仓
    if($warehouse){
        // 根据仓库中的账套编码返回接口必须信息
        if($warehouse['account_code']=='302'){
            $infoArr['appKey'] = env('TPLUS2.appKey');
            $infoArr['appSecret'] = env('TPLUS2.appSecret');
            $infoArr['token'] = TplusApi2::getOpenToken();
        }
        if($warehouse['account_code']=='301'){
            $infoArr['appKey'] = env('TPLUS.appKey');
            $infoArr['appSecret'] = env('TPLUS.appSecret');
            $infoArr['token'] = getOpenToken();
        }
        if($warehouse['account_code']=='303'){
            $infoArr['appKey'] = env('TPLUS3.appKey');
            $infoArr['appSecret'] = env('TPLUS3.appSecret');
            $infoArr['token'] = TplusApi3::getOpenToken();
        }
    }
   
    
    return $infoArr;
}

// 采购入库单
function stockIn($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinPurchase($st, $et, $pageSize, 0, $warehouse['wh_code']);
    // dump($wangData);

    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购入库 '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'采购入库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockIn($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                }else if($row['status']=='未同步'){
                    $res = w2tStockIn($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
                
               
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    

    return $msg;
}

function w2tStockIn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
                Unit:{Name:"'.$item->unit_name.'"},
            Quantity: '.$item->num.',
            Amount: '.$item->total_cost.',
            Price: '.$item->cost_price.',
            taxAmount: '.$item->tax_amount.',
            taxPrice: '.$item->tax_price.',
            TaxRate: '.(floatval($item->tax)/100).'
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
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    
    
    return $res;
}

// 销售出库单
function stockOut($st, $et, $warehouse){
    $pagesize = 20;
    $msg = '';
    
    $rangeTimeArrOut = getRangeTimeArr($st, $et);
    foreach($rangeTimeArrOut as $rangeTimeOut){
        if(strtotime($rangeTimeOut['start'])!=strtotime(date("Y-m-d"))){
            $day_count = 0;
            $orders = [];
            // 获取一天24小时时间段
            $rangeTimeArr = getDayHours($rangeTimeOut['start']);
        
            // 获取一天24小时的全部订单
            foreach($rangeTimeArr as $rangeTime){
                
                $wangData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, 1, $warehouse['wh_code']);
                
                if($wangData->status==0){
                    
                    $total = $wangData->data->total_count;
                    $day_count+=$total;
                    if($total>0){
                        
                        $pages = intval($total / $pagesize);
                        if($total % $pagesize != 0){
                            $pages += 1;
                        }
                        for($page=1; $page<=$pages; $page++){
                            $pageData = qmTest($rangeTime['start'], $rangeTime['end'], $pagesize, $page, $warehouse['wh_code']);
                            $orders = array_merge($orders, $pageData->data->order);
                        }
                    }
                }
            }
            $msg=$msg.'销售出库'.date("Y-m-d", strtotime($rangeTimeOut['start'])).' 查询到'.$day_count."条数据".PHP_EOL;
            $handmakeOrder = []; // 手工建单的订单
            $apiOrder = []; // 接口抓取的订单
        
            // 检查订单是否已录入，并将订单分类
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                // $row = Db::table('voucher_log')->where('voucher_id',$order->order_no)->find();
                if(!$row || $row['status']=='未同步'){
                    // dump($order);
                    // trade_from=2 手工建单 trade_from=3 导入
                    if($order->trade_from==2 || $order->trade_from==3){
                        array_push($handmakeOrder, $order);
                    }
                    if($order->trade_from==1){ // trade_from=1 API抓单 
                        array_push($apiOrder, $order);
                    }
                }
                
                
            }
            // 手工建单 单张录入t+
            if(count($handmakeOrder)>0){
                
                foreach($handmakeOrder as $order){
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    if(!$row){
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>strtotime($order->consign_time),
                            'order_type'=>'销售出库单',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        // 单据录入到t+
                        $res = w2tStockOut($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        Db::table('fa_order')->insert($newRow); 
                    }else{
                        $res = w2tStockOut($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        Db::table('fa_order')->update($row);
                    }
                     
                }
            }

            // 对抓取的订单根据店铺进行细分
            $shopUsed = [];
            foreach($apiOrder as $order){
                if(!in_array($order->shop_no, $shopUsed)){
                    array_push($shopUsed, $order->shop_no);
                }
            }

            $devideOrders = [];
            
            foreach($shopUsed as $shop){
                $devideOrders[$shop] = [];
                foreach($apiOrder as $order){
                    if($order->shop_no==$shop){
                        array_push($devideOrders[$shop], $order);
                    }
                }
                
            }
            
            // 接口抓取 合并录入t+
            foreach($shopUsed as $shop){
                $mixOrders = $devideOrders[$shop];
                if(count($mixOrders)>0){
                    
                    $mixRes = w2tStockOutMany($mixOrders);
                    
                    if($mixRes=='null'){
                        foreach($mixOrders as $order){
                            $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                            if(!$row){
                                $newRow = [
                                    'warehouse'=>$warehouse['wh_name'],
                                    'order_num'=>$order->order_no, 
                                    'order_detail'=>json_encode($order), 
                                    'order_time'=>strtotime($order->consign_time),
                                    'order_type'=>'销售出库单',
                                    'status'=>'已同步',
                                    'result'=>'已同步',
                                ];
                                Db::table('fa_order')->insert($newRow);
                            }else{
                                $row['status'] = '已同步';
                                $row['status'] = '已同步';
                                Db::table('fa_order')->update($row);
                            }
                        }
                    }else{
                        $str = '';
                        foreach($mixOrders as $order){
                            $str.=$order->order_no.', ';
                        }
                        foreach($mixOrders as $order){
                            $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                            $errMsg = translateErrMsg(json_decode($mixRes)->message);
                            if(!$row){
                                
                                $newRow = [
                                    'warehouse'=>$warehouse['wh_name'],
                                    'order_num'=>$order->order_no, 
                                    'order_detail'=>json_encode($order), 
                                    'order_time'=>strtotime($order->consign_time),
                                    'order_type'=>'销售出库单',
                                    'status'=>'未同步',
                                    'result'=>"合并录入失败,部分单据存在问题：".$errMsg
                                ];
                                Db::table('fa_order')->insert($newRow);
                            }else{
                                
                                $row['result'] = "合并录入失败,部分单据存在问题：".$errMsg;
                                Db::table('fa_order')->update($row);
                            }
                        }
                        $msg.="合并录入失败：".$str.",".$mixRes.PHP_EOL;
                        
                    }
                }
            }
            
        }
        sleep(1);
    }
    return $msg;
    
}

function w2tStockOut($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){

        $price = (floatval($item->cost_price)>=0.01 ? floatval($item->cost_price) : 0);
        $amount =( floatval($item->total_amount)>=0.01 ? floatval($item->total_amount) : 0);
        
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.',
            Price: '.$price.',
            Amount: '.$amount.',
            origTaxSalePrice: '.$item->sell_price.',
            IsPresent: '.($item->gift_type?'true':'false').',
            DynamicPropertyKeys: ["pubuserdefnvc1", "pubuserdefnvc2", "pubuserdefnvc3"],
            DynamicPropertyValues: ["'.$w_order->src_trade_no.'", "'.$w_order->src_order_no.'", "'.$w_order->order_no.'"]
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
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$w_order->shop_no.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Clerk: {
                Code: "'.$w_order->salesman_no.'"
            },
            Memo: "'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }

    return $res;
}

function w2tStockOutMany($orders){
    
    $details = '';
    foreach($orders as $key=>$w_order){
        foreach($w_order->details_list as $item){

            $price = (floatval($item->cost_price)>=0.01 ? floatval($item->cost_price) : 0);
            $amount =( floatval($item->total_amount)>=0.01 ? floatval($item->total_amount) : 0);
            
            $detail = '{
                Inventory: {
                    Code: "'.$item->spec_no.'"
                },
                BaseQuantity: '.$item->goods_count.',
                Price: '.$price.',
                Amount: '.$amount.',
                origTaxSalePrice: '.$item->sell_price.',
                IsPresent: '.($item->gift_type?'true':'false').',
                DynamicPropertyKeys: ["pubuserdefnvc1", "pubuserdefnvc2", "pubuserdefnvc3"],
                DynamicPropertyValues: ["'.$w_order->src_trade_no.'", "'.$w_order->src_order_no.'", "'.$w_order->order_no.'"]
            }';
            $details.=$detail.',';
        }
        if(count($orders)==($key+1)){
            
            $details = substr($details,0,strlen($details)-1);
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$orders[0]->shop_no.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($orders[0]->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$orders[0]->warehouse_no.'"
            },
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';


    $infoArr = getInfoArr($orders[0]->warehouse_no);
    
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }

    return $res;
}

// 其他入库单
function dealStockInOther($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.' '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'其他入库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockInOther($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                    
                }else if($row['status']=='未同步'){
                    $res = w2tStockInOther($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
                
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInOther($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            
            VoucherType: {
                Code: "ST1004"
            },
            Partner: {
                Code: "0010001"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->stockin_time/1000).'",
            BusiType: {
                Code: "13"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',其他入库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
   
    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 其他出库单
function dealStockOutOther($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockOutOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockOutOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'其他出库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockOutOther($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                    
                }else if($row['status']=='未同步'){
                    $res = w2tStockOutOther($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutOther($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            
            VoucherType: {
                Code: "ST1024"
            },
            Partner: {
                Code: "0010001"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "13"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',其他出库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点入库单
function dealStockInPd($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdInDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.' '.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'其他入库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockInPd($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                    
                }else if($row['status']=='未同步'){
                    $res = w2tStockInPd($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
                
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInPd($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
           
            VoucherType: {
                Code: "ST1004"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->stockin_time/1000).'",
            BusiType: {
                Code: "08"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',盘点入库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点出库单
function dealStockOutPd($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdOutDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                // echo $page;
                $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'盘点出库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockOutPd($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                }else if($row['status']=='未同步'){
                    $res = w2tStockOutPd($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutPd($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            
            VoucherType: {
                Code: "ST1024"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "25"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.',盘点出库单,'.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    $infoArr = getInfoArr($w_order->warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨入库单
function dealStockInTransfer($st, $et){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    try {
        //code...
        $wangData = wangStockinTransfer($st, $et, $pageSize, 0);
    } catch (\Throwable $th) {
        //throw $th;
        return $th;
    }
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinTransfer($st, $et, $pageSize, $page);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$order->to_warehouse_name,
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->modified/1000,
                        'order_type'=>'调拨入库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockInTransfer($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                }else if($row['status']=='未同步'){
                    $res = w2tStockInTransfer($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockInTransfer($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->num.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",

            VoucherType: {
                Code: "ST1004"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->created_time/1000).'",
            BusiType: {
                Code: "78"
            },
            Warehouse: {
                Code: "'.$w_order->to_warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.','.$w_order->src_order_no.',调拨入库单,源仓库：'.$w_order->from_warehouse_name.','.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherReceiveCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else if(count($infoArr2)>0){
        $res = otherReceiveCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨出库单
function dealStockOutTransfer($st, $et, $warehouse){
    $pageSize = 50;
    $msg = '';
    
    // 查询旺店通单据
    try {
        //code...
        $wangData = wangStockoutTransfer($st, $et, $pageSize, 0, $warehouse['wh_code']);
    } catch (\Throwable $th) {
        //throw $th;
        return $th;
    }
    // 查询旺店通单据
    
    
    if($wangData->status==0){
        $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.$warehouse['wh_name'].' '.date("Y-m-d",strtotime($st)).' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockoutTransfer($st, $et, $pageSize, $page, $warehouse['wh_code']);
                $orders = array_merge($orders, $pageData->data->order);
            }
            foreach($orders as $order){
                // 查询单据是否已转到t+
                $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                
                if(!$row){
                    // 单据录入到t+
                    $newRow = [
                        'warehouse'=>$warehouse['wh_name'],
                        'order_num'=>$order->order_no, 
                        'order_detail'=>json_encode($order), 
                        'order_time'=>$order->consign_time/1000,
                        'order_type'=>'调拨出库单',
                        'status'=>'未同步',
                        'result'=>'未同步',
                    ];
                    
                    $res = w2tStockOutTransfer($order);
                    
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $newRow['status'] = '已同步';
                        $newRow['result'] = '已同步';
                    }else{
                        $newRow['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                    }
                    Db::table('fa_order')->insert($newRow);
                }else if($row['status']=='未同步'){
                    $res = w2tStockOutTransfer($order);
                    if($res=='null'){
                        // 单据信息录入到数据库
                        $row['status'] = '已同步';
                        $row['result'] = '已同步';
                    }else{
                        $row['result'] = translateErrMsg(json_decode($res)->message);
                        $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        
                    }
                    Db::table('fa_order')->update($row);
                }
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }
    
    return $msg;
}

function w2tStockOutTransfer($w_order){
    $details = '';
    foreach($w_order->detail_list as $key=>$item){

        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.$item->goods_count.'
        }';
        if(count($w_order->detail_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }
    
    // 查询仓库名
    $warehouse = Db::table('fa_warehouse')
        ->where('wh_code', $w_order->to_warehouse_no)
        ->find();
    $warehouseName = $warehouse? $warehouse['wh_name']: '';
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"false",
            
            VoucherType: {
                Code: "ST1024"
            },
            VoucherDate: "'.date('Y-m-d',$w_order->consign_time/1000).'",
            BusiType: {
                Code: "78"
            },
            Warehouse: {
                Code: "'.$w_order->from_warehouse_no.'"
            },
            Memo: "'.$w_order->order_no.','.$w_order->src_order_no.',调拨出库单,入'.$warehouseName.','.$w_order->remark.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';
    
    $infoArr = getInfoArr($w_order->to_warehouse_no);
    $infoArr2 = getInfoArr($w_order->from_warehouse_no);
    // $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = otherDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else if(count($infoArr2)>0){
        $res = otherDispatchCreate($infoArr2['appKey'], $infoArr2['appSecret'], $infoArr2['token'], $content);
    }
    else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}
