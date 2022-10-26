<?php

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Alfian");
$sayHello("Budi");

// Anonymouse Function Sebagai Argument
function sayGoodBye(string $name, $closure)
{
  $finalName = $closure($name);
  echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Alfian", function (string $name): string {
  return strtoupper($name);
});

// Mengakses Vriable di Luar Closure
$firstName  = "Alfian";
$lastName = "Yulianto";

$sayHelloAlfian = function () use ($firstName, $lastName): string {
  return "Hello $firstName $lastName" . PHP_EOL;
};

echo $sayHelloAlfian();
