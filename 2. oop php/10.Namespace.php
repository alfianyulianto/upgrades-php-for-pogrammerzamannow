<?php

include_once "./data/Conflict.php";
include_once "./data/Helper.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

// Function dan Constant di Namespace
echo \Helper\APPLICATION;

\Helper\helpMe();
