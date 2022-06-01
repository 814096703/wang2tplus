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