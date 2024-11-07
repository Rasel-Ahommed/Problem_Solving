<?php
function countApplesAndOranges($s, $t, $a, $b, $m, $n){
    $input1 = explode(' ', trim(fgets(STDIN)));
    $input2 = explode(' ', trim(fgets(STDIN)));
    $apple = 0;
    $orange = 0;

    if(count($input1) > $m || count($input2) > $n){
        return 0;
    }

    for($i = 0; $i < count($input1); $i++){
        $sum = $a + $input1[$i];
        if($s <= $sum && $t >= $sum){
            $apple++;
        }
    }

    for($i = 0; $i < count($input2); $i++){
        $sum = $b + $input2[$i];
        if($s <= $sum && $t >= $sum){
            $orange++;
        }
    }

    echo $apple."\n";
    echo $orange."\n";
}

$first_multiple_input = explode(' ', trim(fgets(STDIN)));
$s = $first_multiple_input[0];
$t = $first_multiple_input[1];

$second_multiple_input = explode(' ', trim(fgets(STDIN)));
$a = $second_multiple_input[0];
$b = $second_multiple_input[1];

$third_multiple_input = explode(' ', trim(fgets(STDIN)));
$m = $third_multiple_input[0];
$n = $third_multiple_input[1];

countApplesAndOranges($s, $t, $a, $b, $m, $n);
