<?php
$n = intval(trim(fgets(STDIN)));

$arrs = array_map("intval", explode(' ',trim(fgets(STDIN))));

$positive = 0;
$negative = 0;
$zero     = 0;

foreach($arrs as $arr){
    if($arr > 0){
        $positive += 1;
    }elseif($arr < 0){
        $negative += 1;
    }else{
        $zero += 1;
    }
    
}



$positiveRiteo = $positive / $n;
$negativeRiteo = $negative /$n;
$zeroRiteo = $zero / $n;


echo number_format($positiveRiteo ,6)."\n";
echo number_format($negativeRiteo ,6)."\n";
echo number_format($zeroRiteo ,6)."\n";

