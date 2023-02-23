<?php
    function age($a, $b){
        echo $a;
        echo $b;
        if($a < 0 || $b < 0 || $a > 50 || $b > 50 ){
            return 0;
        } else {
            $num = $b - $a;
            $c = $num + $b;
            return $c;
        }
    }
    echo age(8, 10);
?>