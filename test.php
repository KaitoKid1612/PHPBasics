<?php

function numberSequence($n) {
    $f0 = 4;
    $f1 = 7;
    $f2 = 5;
    $fn;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0) {
        return $f0;
    } else if ($n == 1) {
        return $f1;
    } else if ($n == 2) {
        return $f2;
    } else {
        for($i = 3; $i<$n; $i++) {
            $fn = $f(n-1)+$f(n-2)+$f(n-3);
        }
    }
    return $fn;
}

echo numberSequence(3)

?>