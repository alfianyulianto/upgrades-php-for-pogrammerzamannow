<?php

// Faktorial Menggunakan Looping
// function factorialLoop(int $values): int
// {
//   $total = 1;
//   for ($i = 1; $i <= $values; $i++) {
//     $total *= $i;
//   }

//   return $total;
// }

// var_dump(factorialLoop(5));

// Recursive Function
function factorialRecursive(int $values): int
{
  if ($values == 1) {
    return 1;
  } else {
    return $values * factorialRecursive($values - 1);
  }
}

var_dump(factorialRecursive(5));
