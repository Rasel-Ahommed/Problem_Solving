<?php 
$n = intval(fgets(STDIN));
$result = [];

for($i = 1; $i <= $n; $i++){
    $num = intval(fgets(STDIN));

    if($num >= 38 && ($num % 5) >= 3){
        $result[] = (5 - ($num % 5) ) + $num;
    }
    else{
        $result[] = $num;
    }
}
foreach ($result as $key => $value) {
    echo $value."\n";
}


