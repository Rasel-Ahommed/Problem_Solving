<?php

$n = intval(trim(fgets(STDIN)));

$a =  array_map('intval', explode(' ', trim(fgets(STDIN))));

if(count($a) == $n){
    $sum = array_sum($a);
    echo $sum;
}
else{
    echo "your array element is bigger then " . $n;
}
