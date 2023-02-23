<?php
namespace Math\Circle;
use Math\Constant;

require_once('Constant.php');

class Circle {
    public function getAreaCircles($radius) {
        return Constant::PI*$radius*$radius;
    }
}

?>