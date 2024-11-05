<?php
$n = intval(trim(fgets(STDIN)));
$arr = array_map("intval", explode(' ', trim(fgets(STDIN))));
$n = count($arr);

$max = $arr[0];

for($i=1; $i < $n; $i++){
   if($arr[$i] > $max){
        $max = $arr[$i];
   }
}

$result = 0;
for($i = 0; $i < $n; $i++){
    if($arr[$i] == $max){
        $result++;
    }
}

echo $result;
