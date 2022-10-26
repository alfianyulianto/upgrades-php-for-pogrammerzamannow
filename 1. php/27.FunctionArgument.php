<?php

function sayHello($name)
{
  echo "Hello $name" . PHP_EOL;
}

sayHello("Alfian");
sayHello("Budi");

// Default Argument Value
function defaultArgument($name = "Anonymous")
{
  echo "Hello $name" . PHP_EOL;
}

defaultArgument();
defaultArgument("Alfian Yulianto");

// Type Declaration
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100"); //karena string maka akan do konversi ke PHP menjadi int
// sum("100", "salah"); //error karena salah jika di konversi ke int tidak bisa
sum(10, 10);
sum(true, false); //karena di PHP true dan false adalah 1 dan 0 maka ini bisa dikonversi
// sum([], []); //error karena salah jika di konversi ke int tidak bisa

// Variabel-length Argument List
function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }

  echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40, 50);
$values = [10, 20, 30, 40, 50];
// sumAll($values); //error karena ini sebuah array yang di kirim sebagai parameter
sumAll(...$values); //150 karean array values sudah di pecah menjadi tiap-tiap element
