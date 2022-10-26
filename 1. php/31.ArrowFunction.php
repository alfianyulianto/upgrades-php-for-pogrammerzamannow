<?php

$firstName  = "Alfian";
$lastName = "Yulianto";

// Anonymouse Function
$sayHelloAlfian = function () use ($firstName, $lastName): string {
  return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHelloAlfian();
echo $arrowFunction();
