<?php
echo "give a array\n";
$arr = array_map("intval", explode(' ', trim(fgets(STDIN))));
$n = count($arr);


//bubble sort
for($i = 0; $i < $n - 1; $i++){
    $swap = false;
    for($j = 0; $j < $n - 1 - $i; $j++){
        if($arr[$j] > $arr[$j + 1]){
            [$arr[$j],$arr[$j+1]] = [$arr[$j+1],$arr[$j]];
            $swip = true;
        }
    }
    if(!$swip){
        break;
    }
}

//binary search
echo "give finding number\n";
$find = intval(trim(fgets(STDIN)));


$low = 0;
$high = $n - 1;
$result = -1;

while($low <= $high){
    $mid = (int)(floor(($low + $high)/2));

    if($arr[$mid] == $find){
        $result = $mid;
        break;
    }
    elseif($arr[$mid] < $find){
        $low = $mid + 1;
    }
    elseif($arr[$mid] > $find){
        $high = $mid - 1;
    }
}

if($result != -1){
    echo "The number is at position " . ($result + 1) . "\n";
}else{
    echo "Number not found\n";
}



