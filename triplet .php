<?php

$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
$b = array_map('intval', explode(' ', trim(fgets(STDIN))));
$result = [0,0];

if(count($a) == count($b)){
    for($i = 0; $i < count($a); $i++){
        if($a[$i] > $b[$i]){
            $result[0]++;
        }
        elseif($a[$i] < $b[$i]){
            $result[1]++;
        }
    };
    foreach ($result as $value) {
        echo $value." ";
    }
}else{
    echo "array length is not equal";
}

