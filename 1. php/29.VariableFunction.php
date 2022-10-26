<?php

function foo()
{
  echo "FOO" . PHP_EOL;
}

function bar()
{
  echo "BAR" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// Penggunaan Variable Function / closure
function sayHello(string $name, $closure)
{
  $finalName = $closure($name);
  echo "Hallo $finalName" . PHP_EOL;
}

function sampleName(string $name): string
{
  return "Sample $name";
}

sayHello("Alfian", "strtoupper");
sayHello("Alfian", "strtolower");
sayHello("Alfian", "sampleName");
