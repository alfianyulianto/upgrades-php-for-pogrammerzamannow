<?php

include_once "./data/Conflict.php";
include_once "./data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$dummy = new Dummy();
