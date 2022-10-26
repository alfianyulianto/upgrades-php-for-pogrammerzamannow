<?php

function sum(int $first, int $last)
{
  $total = $first + $last;
  return $total;
}

echo sum(10, 10) . PHP_EOL;
echo sum(25, 90) . PHP_EOL;

function getFinalValue(int $value)
{
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } elseif ($value >= 50) {
    return "D";
  } else {
    return "E";
  }
}

echo getFinalValue(90) . PHP_EOL;
echo getFinalValue(10) . PHP_EOL;

// Return Type Declaration
function returnTypeDeclarationInt(int $first, int $last): int
{
  return $first + $last;
}

echo returnTypeDeclarationInt(100, 200);

function returnTypeDeclarationString(int $value): string
{
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } elseif ($value >= 50) {
    return "D";
  } else {
    return 1;
  }
}

var_dump(returnTypeDeclarationString(0)); //string 1 karena int 1 akan dikonversi ke string
