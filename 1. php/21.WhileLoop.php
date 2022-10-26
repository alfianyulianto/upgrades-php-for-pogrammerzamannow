<?php

$counter = 1;

// while ($counter <= 10) {
//   echo "Ini adalah while loop ke $counter" . PHP_EOL;
//   $counter++;
// }

// Syntax Alterbatif
while ($counter <= 10) :
  echo "Ini adalah while loop ke $counter" . PHP_EOL;
  $counter++;
endwhile;
