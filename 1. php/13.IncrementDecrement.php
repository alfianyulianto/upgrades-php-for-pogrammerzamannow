<?php

$a = 10;
$a++;
$a++;
var_dump($a); // 12

$a = 10;
$b = ++$a;
var_dump($b); // 11

$a = 10;
$b = $a++;
var_dump($b); // 10
