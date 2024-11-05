<?php 

echo "Enter your array\n";
$arr = array_map('intval',explode(' ', trim(fgets(STDIN))));

echo 'enter your finding number : ';
$find = trim(fgets(STDIN));
$flug = false;
$point = 0;
for($i = 0; $i < count($arr); $i++){
    
    if($arr[$i] == $find){
        $point = $i;
        $flug = true;
        break;
    }
}

if($flug == true){
    echo "your finding data have at ". $point + 1 . " position";
}
else{
    echo 'data not foune';
}

   


