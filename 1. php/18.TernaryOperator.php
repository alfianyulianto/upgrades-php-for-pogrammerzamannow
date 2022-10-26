<?php

$geneder = "PRIA";
$hi = null;

// if ($geneder == "PRIA") {
//   $hi = "Hi, bro!";
// } else {
//   $hi = "Hi,nona!";
// }

// Sytax Ternary Operator
$hi = $geneder == "PRIA" ? "Hi, bro!" : "Hi, nona!";

echo $hi . PHP_EOL;
