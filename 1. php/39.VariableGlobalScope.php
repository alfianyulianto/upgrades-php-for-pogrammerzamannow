<?php

// Global Scope
$name = "Alfian";

function sayHello()
{
  global $name;
  echo $name . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL;
}
sayHello();
