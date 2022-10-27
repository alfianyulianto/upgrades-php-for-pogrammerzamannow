<?php

include_once "./data/Conflict.php";
include_once "./data/Helper.php";

use Data\One\Conflict;
// use Data\Two\Conflict; //error karena kita tidak bisa menggunakan nama class yang sama walaupun namespacenya berbeda
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION;
