<?php
    echo 'Cookies in PHP';
    setcookie('name','Viet', time() + 24*3600);

    // print_r($_COOKIE);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
    setcookie('name', '', time() - 24*3600);
?>