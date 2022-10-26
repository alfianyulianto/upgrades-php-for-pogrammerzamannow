<?php

function increment()
{
  // $counter = 1;
  static $counter = 1;

  echo "Counter  = $counter" . PHP_EOL;

  $counter++;
}

increment();
increment();
increment();
