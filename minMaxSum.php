<?php 

$arr = array_map("intval", explode(' ', trim(fgets(STDIN))));
$min = 0;
$max = 0;
$temp = 0;
$n = count($arr);

for($i = 0; $i < $n - 1; $i++){
    for($j = 0; $j < $n - 1 - $i; $j++){
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
            $temp = 0;
        
        }
    }
}


for($i = 0; $i < $n - 1; $i++){
    $min += $arr[$i];
}

for($i = 1; $i < $n; $i++){
    $max += $arr[$i];
}

echo $min.' '.$max;