<?php
$phone = '0343699738';

$pattern = '/^0[0-9]{9}$/';

$check = preg_match($pattern, $phone, $matches);

var_dump($matches);