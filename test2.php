<?php
 
function numberSequence($n){
    $f = array();
    $f[0] = 4;
    $f[1] = 7;
    $f[2] = 5;
    for ($i = 3; $i <= $n; $i++){
        $f[$i] = $f[$i-1] + $f[$i-2] + $f[$i-3];
    }
    return $f[$n];
}
$n = 2;
echo numberSequence($n);
 
?>