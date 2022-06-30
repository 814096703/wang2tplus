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
        // $range = dealStockInTransfer('2022-06-01 00:00:00', '2022-06-06 00:00:00');
        // $range = dealStockOutTransfer('2022-06-01 00:00:00', '2022-06-04 00:00:00', $warehouse);
        // $warehouse = Db::table('fa_warehouse')->where('wh_code', '01')->find();
        // $range =  stockOutRefund('2022-06-01 00:00:00', '2022-06-22 00:00:00', $warehouse);
        
        // dump($range);
        $w_order_str = '{"tax": "0.0000", "remark": "", "status": "110", "weight": "17.0400", "created": "1654483120000", "id_card": "", "shop_id": 117, "shop_no": "DS53", "currency": "", "discount": "0.0000", "fullname": "郁钢梁", "modified": "2022-06-07 07:49:13", "order_no": "CK312556", "post_fee": "0.0000", "tax_rate": "0.0000", "trade_id": 373840, "trade_no": "JY202206060173", "cs_remark": "\"猫超南昌PON220515316600569PON220517317140898PON220522317868996\"", "flag_name": "无", "nick_name": "浙江天猫网络科技有限公司(经销）", "shop_name": "杭州习水村酒业有限公司", "bad_reason": 0, "cod_amount": "0.0000", "invoice_id": 0, "order_type": 1, "receivable": "62520.0000", "trade_from": 2, "trade_time": "1654483048000", "trade_type": 2, "customer_no": "KH202206020155", "employee_no": "015", "goods_count": "198.0000", "package_fee": "0", "picklist_no": "", "platform_id": 0, "post_amount": "0.0000", "salesman_no": "015", "shop_remark": "", "stockout_id": 316300, "trade_label": "", "block_reason": "0", "consign_time": "2022-06-07 07:48:40", "details_list": [{"paid": "24295.2700", "prop1": "", "prop2": "", "prop3": "", "prop4": "", "prop5": "", "prop6": "", "rec_id": 431907, "remark": "", "weight": "0.0000", "barcode": "6901481078479", "spec_id": 750, "spec_no": "习酒142", "src_oid": "AD202206060272", "src_tid": "AT202206060030", "discount": "0.0000", "goods_id": 765, "goods_no": "XIJIU142", "suite_no": "", "tax_rate": "0.0000", "from_mask": 0, "gift_type": 0, "spec_code": "", "spec_name": "53°500ml*6习酒君品（新品透明盒）", "cost_price": "0.0000", "good_prop1": "", "good_prop2": "", "good_prop3": "", "good_prop4": "", "good_prop5": "", "good_prop6": "", "goods_name": "53°500ml*6习酒君品（新品透明盒）", "goods_type": 1, "sell_price": "1350.0000", "goods_count": "18.0000", "platform_id": "0", "share_price": "1350.0000", "stockout_id": 316300, "market_price": "1350.0000", "share_amount": "24300.0000", "total_amount": "0.0000", "refund_status": "0", "sale_order_id": 487921, "src_order_detail_id": 487921, "position_details_list": [{"batch_no": "", "expire_date": "", "position_id": -2, "position_no": "采购未上架", "position_goods_count": "18.0000"}]}, {"paid": "1376.0900", "prop1": "", "prop2": "", "prop3": "", "prop4": "", "prop5": "", "prop6": "", "rec_id": 431908, "remark": "", "weight": "17.0400", "barcode": "6901481019601", "spec_id": 767, "spec_no": "习酒147", "src_oid": "AD202206060273", "src_tid": "AT202206060030", "discount": "0.0000", "goods_id": 783, "goods_no": "XIJIU147", "suite_no": "", "tax_rate": "0.0000", "from_mask": 0, "gift_type": 0, "spec_code": "", "spec_name": "53°500ml*6习酒方品·鎏单瓶", "unit_name": "瓶", "cost_price": "0.0000", "good_prop1": "", "good_prop2": "", "good_prop3": "", "good_prop4": "", "good_prop5": "", "good_prop6": "", "goods_name": "53°500ml*6习酒方品·鎏单瓶", "goods_type": 1, "sell_price": "188.0000", "goods_count": "12.0000", "platform_id": "0", "share_price": "188.0000", "stockout_id": 316300, "market_price": "188.0000", "share_amount": "2256.0000", "total_amount": "0.0000", "refund_status": "0", "sale_order_id": 487922, "src_order_detail_id": 487922, "position_details_list": [{"batch_no": "", "expire_date": "", "position_id": -2, "position_no": "采购未上架", "position_goods_count": "12.0000"}]}, {"paid": "14212.5200", "prop1": "", "prop2": "", "prop3": "", "prop4": "", "prop5": "", "prop6": "", "rec_id": 431909, "remark": "", "weight": "0.0000", "barcode": "6901481019991", "spec_id": 886, "spec_no": "习酒166", "src_oid": "AD202206060274", "src_tid": "AT202206060030", "discount": "0.0000", "goods_id": 922, "goods_no": "XIJIU166", "suite_no": "", "tax_rate": "0.0000", "from_mask": 0, "gift_type": 0, "spec_code": "", "spec_name": "53°500ml*6习酒金质第四代（2021产） 2瓶送一个手提袋", "cost_price": "0.2403", "good_prop1": "", "good_prop2": "", "good_prop3": "", "good_prop4": "", "good_prop5": "", "good_prop6": "", "goods_name": "53°500ml*6习酒金质第四代（2021产）2瓶送1个手提袋", "goods_type": 1, "sell_price": "268.0000", "goods_count": "90.0000", "platform_id": "0", "share_price": "268.0000", "stockout_id": 316300, "market_price": "268.0000", "share_amount": "24120.0000", "total_amount": "21.6270", "refund_status": "0", "sale_order_id": 487923, "src_order_detail_id": 487923, "position_details_list": [{"batch_no": "", "expire_date": "", "position_id": -2, "position_no": "采购未上架", "position_goods_count": "90.0000"}]}, {"paid": "3773.4400", "prop1": "", "prop2": "", "prop3": "", "prop4": "", "prop5": "", "prop6": "", "rec_id": 431910, "remark": "", "weight": "0.0000", "barcode": "6901481020003", "spec_id": 887, "spec_no": "习酒167", "src_oid": "AD202206060275", "src_tid": "AT202206060030", "discount": "0.0000", "goods_id": 923, "goods_no": "XIJIU167", "suite_no": "", "tax_rate": "0.0000", "from_mask": 0, "gift_type": 0, "spec_code": "", "spec_name": "53°500ml*6习酒银质第三代（2021产）", "cost_price": "1.7719", "good_prop1": "", "good_prop2": "", "good_prop3": "", "good_prop4": "", "good_prop5": "", "good_prop6": "", "goods_name": "53°500ml*6习酒银质第三代（2021产）", "goods_type": 1, "sell_price": "158.0000", "goods_count": "66.0000", "platform_id": "0", "share_price": "158.0000", "stockout_id": 316300, "market_price": "158.0000", "share_amount": "10428.0000", "total_amount": "116.9454", "refund_status": "0", "sale_order_id": 487924, "src_order_detail_id": 487924, "position_details_list": [{"batch_no": "", "expire_date": "", "position_id": -2, "position_no": "采购未上架", "position_goods_count": "66.0000"}]}, {"paid": "18862.6800", "prop1": "", "prop2": "", "prop3": "", "prop4": "", "prop5": "", "prop6": "", "rec_id": 431911, "remark": "", "weight": "0.0000", "barcode": "6901481075836", "spec_id": 2061, "spec_no": "习酒197", "src_oid": "AD202206060276", "src_tid": "AT202206060030", "discount": "0.0000", "goods_id": 2148, "goods_no": "XIJIU197", "suite_no": "", "tax_rate": "0.0000", "from_mask": 0, "gift_type": 0, "spec_code": "", "spec_name": "53°500ml*12方品习酱酒（2022产）", "cost_price": "0.0000", "good_prop1": "", "good_prop2": "", "good_prop3": "", "good_prop4": "", "good_prop5": "", "good_prop6": "", "goods_name": "53°500ml*12方品习酱酒（2022产）", "goods_type": 1, "sell_price": "118.0000", "goods_count": "12.0000", "platform_id": "0", "share_price": "118.0000", "stockout_id": 316300, "market_price": "118.0000", "share_amount": "1416.0000", "total_amount": "0.0000", "refund_status": "0", "sale_order_id": 487925, "src_order_detail_id": 487925, "position_details_list": [{"batch_no": "", "expire_date": "", "position_id": -2, "position_no": "采购未上架", "position_goods_count": "12.0000"}]}], "fenxiao_nick": "", "id_card_type": 0, "invoice_type": 0, "logistics_id": 1, "logistics_no": "ZS202206070034", "picklist_seq": 0, "print_remark": "\"猫超南昌PON220515316600569PON220517317140898PON220522317868996\"", "receiver_dtb": "杭州市 萧山区", "receiver_zip": "", "src_order_no": "JY202206060173", "src_trade_no": "AT202206060030", "trade_status": 110, "warehouse_id": 1, "warehouse_no": "01", "buyer_message": "", "customer_name": "刘鹏鸽", "delivery_term": 4, "invoice_title": "", "receiver_area": "浙江省 杭州市 萧山区", "receiver_city": 330100, "receiver_name": "刘鹏鸽", "refund_status": 0, "logistics_code": "121565", "logistics_list": [{"width": "0.0000", "height": "0.0000", "length": "0.0000", "rec_id": 490342, "remark": "", "volume": "0.000000000000", "weight": "17.0400", "postage": "0.0000", "calc_weight": "17.0400", "stockout_id": 316300, "logistics_id": 1, "logistics_no": "ZS202206070034", "package_name": "未知", "logistics_name": "测试"}], "logistics_name": "测试", "logistics_type": 1, "receiver_telno": "", "warehouse_name": "萧山仓-杭州习水村", "invoice_content": "", "receiver_mobile": "18267120734", "goods_total_cost": "138.5724", "receiver_address": "靖江街道宏业路188号", "receiver_country": 0, "stock_check_time": "1654559305000", "receiver_district": 330109, "receiver_province": 330000, "goods_total_amount": "62520.0000", "logistics_print_status": 0, "warehouse_mapping_code": ""}';
        $w_order = json_decode($w_order_str);
        $res = w2tStockOut($w_order);
        echo($res);
        
        // echo date("Y-m-d H:i:s", strtotime('2022-02-11'));
        // addWh();
        // $warehouseArr = Db::table('fa_warehouse')->select();
        // dump($warehouseArr);
        // foreach($warehouseArr as $warehouse){
        //     echo $warehouse['wh_code'].'\n';
        // }
        
        // $resJson = json_decode($res);
        // $infoArr = w2tStockOutRefund($resJson);
        // dump($infoArr);

    }

    public function handTrans(){
        $order_no = $_GET['order_data'];
        $order_type = $_GET['order_type'];

        $types = [
            '采购入库单'=>[
                'wdt_api'=>'stockinPurchase',
                'wdt2tplus_api'=>'w2tStockIn'
            ],
            '采购入库单(退)'=>[
                'wdt_api'=>'wangPurchaseReturnQueryWithDetail',
                'wdt2tplus_api'=>'w2tPurchaseReturn'
            ],
            '其他入库单'=>[
                'wdt_api'=>'wangStockinOther',
                'wdt2tplus_api'=>'w2tStockInOther'
            ],
            '盘点入库单'=>[
                'wdt_api'=>'wangQueryStockPdInDetail',
                'wdt2tplus_api'=>'w2tStockInPd'
            ],
            '调拨入库单'=>[
                'wdt_api'=>'wangStockinTransfer',
                'wdt2tplus_api'=>'w2tStockInTransfer'
            ],
            '其他出库单'=>[
                'wdt_api'=>'wangStockOutOther',
                'wdt2tplus_api'=>'w2tStockOutOther'
            ],
            '盘点出库单'=>[
                'wdt_api'=>'wangQueryStockPdOutDetail',
                'wdt2tplus_api'=>'w2tStockOutPd'
            ],
            '调拨出库单'=>[
                'wdt_api'=>'wangStockoutTransfer',
                'wdt2tplus_api'=>'w2tStockOutTransfer'
            ]
            // '销售出库单(退)'=>[
            //     'wdt_api'=>'stockinPurchase',
            //     'wdt2tplus_api'=>'w2tStockIn'
            // ],
            // '销售出库单'=>[
            //     'wdt_api'=>'stockinPurchase',
            //     'wdt2tplus_api'=>'w2tStockIn'
            // ]
        ];

        try {
            $w_order = $types[$order_type]['wdt_api']($order_no);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // 采购入库单
    public function startStockIn(){
        
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
            
            foreach($warehouseArr as $warehouse){
                $msg.=stockIn($startTime, $endTime, $warehouse);
                sleep(1);
            }
                
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 其他入库单
    public function startDealStockInOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockInOther($startTime, $endTime, $wh);
                sleep(1);
            }
        
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 盘点入库单
    public function startDealStockInPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockInPd($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 调拨入库单(不支持按仓库查询)
    public function startDealStockInTransfer(){
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
        
            $msg.=dealStockInTransfer($startTime, $endTime);
            
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 销售出库单
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
                sleep(1);
            }
            
            return $res;
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 其他出库单
    public function startDealStockOutOther(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutOther($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 盘点出库单
    public function startDealStockOutPd(){
        $warehouseArr = Db::table('fa_warehouse')->where('wh_type', '账套仓')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutPd($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 调拨出库单
    public function startDealStockOutTransfer(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=dealStockOutTransfer($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 销售出库单(退)
    public function startDealStockOSutRefund(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
            foreach($warehouseArr as $wh){
                $msg.=stockOutRefund($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
           
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
    }
    // 采购入库单(退)
    public function startDealPurchaseReturn(){
        $warehouseArr = Db::table('fa_warehouse')->select();
        try {
            $startTime = date("Y-m-d H:i:s", $_GET['startTime']);
            $endTime = date("Y-m-d H:i:s", $_GET['endTime']);
            $msg = '';
            
            foreach($warehouseArr as $wh){
                $msg.=purchaseReturn($startTime, $endTime, $wh);
                sleep(1);
            }
            
            return $msg;
            
        } catch (\Throwable $th) {
            //throw $th;
            return '出现错误：'.$th;
        }
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
        if($warehouse['account_code']=='305'){
            $infoArr['appKey'] = env('TPLUS4.appKey');
            $infoArr['appSecret'] = env('TPLUS4.appSecret');
            $infoArr['token'] = TplusApi4::getOpenToken();
        }
    }
   
    
    return $infoArr;
}

function getInfoArrByshop($shop_no){
    // 仓库编码查找仓库
    $shop = Db::table('fa_shop')
        ->where('shop_no', $shop_no)
        ->find();
    
    $infoArr = [];
   
    // 根据仓库中的账套编码返回接口必须信息
    if($shop['account_code']=='302'){
        $infoArr['appKey'] = env('TPLUS2.appKey');
        $infoArr['appSecret'] = env('TPLUS2.appSecret');
        $infoArr['token'] = TplusApi2::getOpenToken();
    }
    if($shop['account_code']=='301'){
        $infoArr['appKey'] = env('TPLUS.appKey');
        $infoArr['appSecret'] = env('TPLUS.appSecret');
        $infoArr['token'] = getOpenToken();
    }
    if($shop['account_code']=='303'){
        $infoArr['appKey'] = env('TPLUS3.appKey');
        $infoArr['appSecret'] = env('TPLUS3.appSecret');
        $infoArr['token'] = TplusApi3::getOpenToken();
    }
    if($shop['account_code']=='305'){
        $infoArr['appKey'] = env('TPLUS4.appKey');
        $infoArr['appSecret'] = env('TPLUS4.appSecret');
        $infoArr['token'] = TplusApi4::getOpenToken();
    }
    
    return $infoArr;
}

// 采购入库单
function stockIn($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinPurchase($st, $et, $pageSize, 0, $warehouse['wh_code']);
    // dump($wangData);

    if($wangData->status==0){
        // $orders = [];
        $total = $wangData->data->total_count;
        $msg=$msg.'采购入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                
                $pageData = stockinPurchase($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                // $orders = array_merge($orders, $pageData->data->order);
                $orders = $pageData->data->order;
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
                sleep(1);
            }
            
        }
    }else{
        $msg .= '旺店通接口错误.PHP_EOL';
    }

    return $msg;
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

// 采购入库单(退)
function purchaseReturn($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);

    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'采购退货出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $msg.='正在拉取第'.($page+1).'页数据，共'.($page+1).'页'.PHP_EOL;
                $pageData = wangPurchaseReturnQueryWithDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
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
                            'order_type'=>'采购入库单(退)',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tPurchaseReturn($order);
                        
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
                        $res = w2tPurchaseReturn($order);
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
            
        }
    }else{
        $msg .= '旺店通接口错误';
    }

    return $msg;
}

function w2tPurchaseReturn($w_order){
    $details = '';
    foreach($w_order->details_list as $key=>$item){
        // $item->unit_name=($item->unit_name=='无' ? "件" : $item->unit_name);
        $detail = '{
            "Inventory": {
                Code: "'.$item->spec_no.'"
            },
            "Unit":{Name:"'.$item->goods_unit.'"},
            "Quantity": '.-$item->goods_count.',
            "Price": '.$item->sell_price/1.13.',
            "DynamicPropertyKeys": ["pubuserdefnvc2"],
            "DynamicPropertyValues": ["'.$w_order->src_order_no.'"],
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
            VoucherDate: "'.date('Y-m-d',$w_order->create_time/1000).'",
            BusiType: {
                Code: "02"
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
                sleep(1);
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
                    // if($order->trade_from==2 || $order->trade_from==3){
                    //     array_push($handmakeOrder, $order);
                    // }
                    if($order->trade_from==1){ // trade_from=1 API抓单 
                        array_push($apiOrder, $order);
                    }else{
                        array_push($handmakeOrder, $order);
                    }
                }
                
                
            }
            // 手工建单 单张录入t+
            if(count($handmakeOrder)>0){
                
                foreach($handmakeOrder as $order){
                    // 单据录入到t+
                    $res = w2tStockOut($order);

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
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            
                        }
                        Db::table('fa_order')->insert($newRow); 
                    }else{
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['order_detail'] = json_encode($order);
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            
                            
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
                                $row['result'] = '已同步';
                                Db::table('fa_order')->update($row);
                            }
                        }
                    }else{
                        $str = '';
                        $msg.="合并录入失败：".$str.",".$mixRes.PHP_EOL;
                        
                        foreach($mixOrders as $order){
                            $str.=$order->order_no.', ';
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
                        
                    }
                }
            }
            
        }
        sleep(1);
    }
    return $msg;
    
}

// 销售出库wdt到t+ 单张录入
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

    $partner='';
    $saleman='';
    // 店铺名包含 '公司' ,客户网名作为客户，有业务员，不合并
    // 网店，店铺作为客户，合并随意，没有业务员
    if(strstr($w_order->shop_name, '公司')==false){
        $partner=$w_order->shop_no;
        
    }else{
        $partner=$w_order->customer_no;
        $saleman = 'Clerk: {
            Code: "'.$w_order->salesman_no.'"
        },';
    }
     
    $memo = $w_order->remark;
    $memo = trim($memo, '"');
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$partner.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->consign_time)).'",
            BusiType: {
                Code: "15"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            '.$saleman.'
            Memo: "'.$memo.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    dump($content);
    $infoArr = getInfoArrByshop($w_order->shop_no);
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
       
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$w_order->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        echo('res='.$res.'end');
    }

    return $res;
}
// 销售出库wdt到t+ 合并录入
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
                DetailMemo: "'.$w_order->cs_remark.'",
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


    $infoArr = getInfoArrByshop($orders[0]->shop_no);
    
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$orders[0]->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        // echo('res='.$res.'end');
    }

    return $res;
}

// 销售出库单(退)
function stockOutRefund($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = stockinRefund($st, $et, $pageSize, 1, $warehouse['wh_code']);

    if($wangData->status==0){
       
        $total = $wangData->data->total_count;
        $msg=$msg.'销售出库单(退) '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=1; $page<=$pages; $page++){
                $pageData = stockinRefund($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>strtotime($order->modified),
                            'order_type'=>'销售出库单(退)',
                            'status'=>'未同步',
                            'result'=>'未同步',
                        ];
                        
                        $res = w2tStockOutRefund($order);
                        
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $newRow['status'] = '已同步';
                            $newRow['result'] = '已同步';
                        }else{
                            $newRow['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                        }
                        try {
                            //code...
                            Db::table('fa_order')->insert($newRow);
                        } catch (\Throwable $th) {
                            // dump($newRow);
                            echo $th;
                        }
                        
                    }else if($row['status']=='未同步'){
                        $res = w2tStockOutRefund($order);
                        if($res=='null'){
                            // 单据信息录入到数据库
                            $row['status'] = '已同步';
                            $row['result'] = '已同步';
                        }else{
                           
                            $row['result'] = translateErrMsg(json_decode($res)->message);
                            $msg.="录入失败：".$order->order_no.",".$res.PHP_EOL;
                            
                        }
                        try {
                            //code...
                            Db::table('fa_order')->update($row);
                        } catch (\Throwable $th) {
                            // dump($row);
                            echo $th;
                        }
                        
                    }
                    
                   
                }
            }
        }
    }else{
        $msg .= '旺店通接口错误';
    }

    return $msg;
}

// wdt退货入库单做成t+销售出库单的负数
function w2tStockOutRefund($w_order){
    
    $refundData = refundSearch($w_order->refund_no, 10, 1);
    $refundOrder = $refundData->data->order[0];

    $details = '';
    foreach($w_order->details_list as $key=>$item){
        $price = count($item->refund_order_detail_list)>0
                ? $item->refund_order_detail_list[0]->price
                : $item->checked_cost_price;
        
        $detail = '{
            Inventory: {
                Code: "'.$item->spec_no.'"
            },
            BaseQuantity: '.-$item->num.',
            origTaxSalePrice: '.$price.',
            DynamicPropertyKeys: ["pubuserdefnvc1", "pubuserdefnvc2", "pubuserdefnvc3"],
            DynamicPropertyValues: ["'.$w_order->trade_no_list.'", "'.$w_order->refund_no.'", "'.$w_order->order_no.'"]
        }';
        if(count($w_order->details_list)==($key+1)){
            $details.=$detail;
        }else{
            $details.=$detail.',';
        }
    }

    $partner='';
    $saleman='';
    // 店铺名包含 '公司' ,客户网名作为客户，有业务员，不合并
    // 网店，店铺作为客户，合并随意，没有业务员
    if(strstr($w_order->shop_name, '公司')==false){
        $partner=$w_order->shop_no;
        
    }else{
        $partner=$w_order->customer_no;
        $saleman = 'Clerk: {
            Code: "'.$w_order->operator_name.'"
        },';
    }
     
    $memo = '备注：'.$w_order->remark.'；退还备注：'.$refundOrder->remark;
    $submemo = substr($memo, 0 ,180);
    // 转化为t+数据格式
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            VoucherType: {
                Code: "ST1021"
            },
            Partner: {
                Code: "'.$partner.'"
            },
            VoucherDate: "'.date('Y-m-d',strtotime($w_order->modified)).'",
            BusiType: {
                Code: "16"
            },
            Warehouse: {
                Code: "'.$w_order->warehouse_no.'"
            },
            '.$saleman.'
            Memo: "'.$submemo.'",
            RDRecordDetails: [
                '.$details.'
            ]
        }
    }';

    // dump($content);
    $infoArr = getInfoArrByshop($w_order->shop_no);
    // $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
    if(count($infoArr)>0){
        $res = saleDispatchCreate($infoArr['appKey'], $infoArr['appSecret'], $infoArr['token'], $content);
        sleep(1);
    }else{
        $res = '{"code":"EXERROR0001","message":"目标店铺'.$w_order->shop_no.'没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}';
        // echo('res='.$res.'end');
    }

    return $res;
}

// 其他入库单
function dealStockInOther($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockinOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'其他入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->stockin_time/1000,
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
    
    // 转化为t+数据格式             IsModifiedCode:"false",
    $content = '{
        dto: {
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
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
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 其他出库单
function dealStockOutOther($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangStockOutOther($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'其他出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockOutOther($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
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
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
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
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点入库单
function dealStockInPd($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdInDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'盘点入库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangQueryStockPdInDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
                foreach($orders as $order){
                    // 查询单据是否已转到t+
                    $row = Db::table('fa_order')->where('order_num',$order->order_no)->find();
                    
                    if(!$row){
                        // 单据录入到t+
                        $newRow = [
                            'warehouse'=>$warehouse['wh_name'],
                            'order_num'=>$order->order_no, 
                            'order_detail'=>json_encode($order), 
                            'order_time'=>$order->stockin_time/1000,
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
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
           
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
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 盘点出库单
function dealStockOutPd($st, $et, $warehouse){
    $pageSize = 20;
    $msg = '';
    
    // 查询旺店通单据
    $wangData = wangQueryStockPdOutDetail($st, $et, $pageSize, 0, $warehouse['wh_code']);
    
    if($wangData->status==0){
        
        $total = $wangData->data->total_count;
        $msg=$msg.'盘点出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                // echo $page;
                $pageData = wangQueryStockPdOutDetail($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
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
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
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
        sleep(1);
    }else{
        $res = `{"code":"EXERROR0001","message":"目标仓库没有可执行账套","data":{"Code":"EXERROR0001","StatusCode":400,"islogerror":"1"}}`;
    }
    return $res;
}

// 调拨入库单
function dealStockInTransfer($st, $et){
    $pageSize = 20;
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
        
        $total = $wangData->data->total_count;
        $msg=$msg.'调拨入库单 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockinTransfer($st, $et, $pageSize, $page);
                sleep(1);
                $orders = $pageData->data->order;
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
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",

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
    sleep(1);
    return $res;
}

// 调拨出库单
function dealStockOutTransfer($st, $et, $warehouse){
    $pageSize = 20;
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
        
        $total = $wangData->data->total_count;
        $msg=$msg.'调拨出库单 '.$warehouse['wh_name'].' 查询到'.$total."条数据".PHP_EOL;
        if($total>0){
            $pages = intval($total / $pageSize);
            if($total % $pageSize != 0){
                $pages += 1;
            }
            for($page=0; $page<$pages; $page++){
                $pageData = wangStockoutTransfer($st, $et, $pageSize, $page, $warehouse['wh_code']);
                sleep(1);
                $orders = $pageData->data->order;
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
            IsModifiedCode:"true",
            Code: "'.$w_order->order_no.'",
            
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
    sleep(1);
    return $res;
}
