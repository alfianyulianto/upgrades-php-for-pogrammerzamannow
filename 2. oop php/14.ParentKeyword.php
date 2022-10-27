<?php

include_once "./data/Shape.php";

use Data\{Shape, Rectangel};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; //0

$rectangel = new Rectangel();
// Overriding
echo $rectangel->getCorner() . PHP_EOL; //4

// Parent Keyword
echo $rectangel->getParentCorner() . PHP_EOL; //0
