<?php

$arrs = array_map("intval", explode(' ',trim(fgets(STDIN))));

$positive = 0;
$negative = 0;
$zero     = 0;

foreach($arrs as $arr){
    $split_arr = str_split($arr);

    if(is_numeric($split_arr[0])){
        $check = $arr - 1;
        $check = str_split($check);
        if(is_numeric($check[0])){
            $positive++;
        }else{
            $zero++;
        }
        
    }
    else{
        $negative++;
    };
    
}
$positive = $positive / count($arrs);
$negative = $negative / count($arrs);
$zero = $zero / count($arrs);

echo number_format($positive ,6)."\n";
echo number_format($negative ,6)."\n";
echo number_format($zero ,6)."\n";

