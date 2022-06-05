<?php
// 日期取倒数天数
function getRangeTimeArrDays($days, $st=''){
    $rangeTimeArr = array();
    if($st!=''){
        $startTime = date('Y-m-d H:i:s',strtotime($st));
    }else{
        $startTime = date('Y-m-d H:i:s');
    }

    $startTime = date('Y-m-d H:i:s',strtotime("$startTime + 1 days"));
    
    for($i=0;$i<$days;$i++){
        $et = $startTime;
        $startTime = date('Y-m-d H:i:s',strtotime("$startTime - 1 days"));
        $st = $startTime;
        array_push($rangeTimeArr, array('start'=>$st, 'end'=>$et));
    }
    // dump($rangeTimeArr);
    return $rangeTimeArr;
}

// 获取日期间隔，间隔一小时
function getRangeTimeArrHours($days){
    $rangeTimeArr = array();
    $now = date('Y-m-d H:i:s');
    $startTime = date("Y-m-d").' 23:59:59';
    for($i=0;$i<$days;$i++){
        for($j=0;$j<24;$j++){
            $et = $startTime;
            $startTime = date('Y-m-d H:i:s',strtotime("$startTime - 1 hours"));
            $st = $startTime;
            if(strtotime($et)>strtotime($now) && strtotime($st)<strtotime($now)){
                $et = date('Y-m-d H:i:s',strtotime("$now - 1 minutes"));
            }
            if(strtotime($st)>strtotime($now)){
                continue;
            }
            array_push($rangeTimeArr, array('start'=>$st, 'end'=>$et));
        }
    }
    // dump($rangeTimeArr);
    return $rangeTimeArr;
}

function getDayHours($dateTime){
    $rangeTimeArr = array();
    $startTime = $dateTime;
    for($i=0;$i<24;$i++){
        $endTime=date('Y-m-d H:i:s',strtotime("$startTime + 1 hours")); 
        $rangeTime = array('start'=>$startTime, 'end'=>$endTime);
        array_push($rangeTimeArr, $rangeTime);
        $startTime = $endTime;
    }

    return $rangeTimeArr;
}

function getRangeTimeArr($st, $et){
    $diff= strtotime($et) - strtotime($st) ;

    $days =abs(round($diff / 86400));
    return getRangeTimeArrDays($days+1, $et);
}

function translateErrMsg($msg)
{
    $errArr = [
        "在位置 0 处没有任何行。"=>"缺少供应商信息",
        "NoAuthOrData"=>"没有权限或对应数据",
        "索引超出范围。必须为非负值并小于集合大小。"=>"缺少业务类型"
    ];
    foreach ($errArr as $key => $value) {
        if($key==$msg){
            $msg = $value;
        }
    }
    return $msg;
}

