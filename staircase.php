<?php

$n = intval(fgets(STDIN));

// for($i = 1; $i <= $n; $i++){
//     for($j = 1; $j <= $n ; $j++){
//         if($n - $i < $j){
//             echo "#";
//         }else{
//             echo " ";
//         }
//     }
//     echo "\n";
// }

for($i = 1; $i <= $n; $i++){
    
    printf('%*s', $n - $i, "");
    printf("%.*s\n", $i, "###########################");
}
