<?php

function timeConvention($arr,$type,$lastArr){
    $hour = $arr[0];
    
    if($type == "PM" && $hour < 12){
        $hour += 12;
    }
    elseif($type == "AM" && $hour == 12){
        $hour = "00";
    }else{
        $hour;
    }
    return $hour.":".$arr[1].":".$lastArr[0].$lastArr[1];
}

$time =explode(":",trim(fgets(STDIN)));
$lastSplit = str_split($time[count($time)-1]);
$lenth = count($lastSplit);
$timeType = $lastSplit[$lenth-2].$lastSplit[$lenth-1];

echo timeConvention($time,$timeType,$lastSplit);
