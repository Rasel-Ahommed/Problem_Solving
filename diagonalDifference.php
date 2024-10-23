<?php 

$n = intval(trim(fgets(STDIN)));
$a = [];

function diagonalDifference($arr){
    $length = count($arr);
    $sum1 = 0;
    $sum2 = 0;

    for($i = 0; $i < $length; $i++){
        for($j = $i; $j < $length; $j = $length){
            // echo $arr[$i][$j]. " ";
            $sum1 += $arr[$i][$j];
        }
        for($k = $length - ($i+1); $k >= 0; $k = -1){
            $sum2 += $arr[$i][$k];
        }
    }
    $result = $sum1 - $sum2;
    echo (abs($result));
}



for($i = 0; $i < $n; $i++){
    $input = array_map('intval',explode(' ',trim(fgets(STDIN))));
    if(count($input) == $n){
        for($j = 0; $j < $n; $j++){
            $a[$i][$j] = $input[$j];
        }
    }else{
        echo 'input is invalid';
    }
}

diagonalDifference($a);