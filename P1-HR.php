<?php

function simpleArraySum($ar) {
    return array_sum($ar);
}

$n = intval(trim(fgets(STDIN)));

$arr = array_map('intval',explode(' ',fgets(STDIN))) ;

echo simpleArraySum($arr);