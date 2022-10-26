<?php

function sayHello($name, callable $callback)
{
  $finalName = call_user_func($callback, $name);
  // $finalName = $callback($name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Alfian", "strtoupper");
sayHello("Alfian", function (string $name): string {
  return "Good Bye $name";
});
sayHello("Alfian", fn ($name) => "Good Morning $name");
