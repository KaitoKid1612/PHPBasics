<?php
    echo "We talk about Function </br>";

    function myName($name){
        echo $name;
    }
    myName('Viet');

    $sum = fn($a, $b) => $a + $b;
    echo $sum(4,2);
?>