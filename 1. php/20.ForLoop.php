<?php

// Perulangan Tanpa Init Statement, Kondisi dan Post Stetement
// for (;;) {
//   echo "Ini adlaah for loop" . PHP_EOL;
// }

// Perulangan Dengan Kondisi
// $counter = 1;
// for (; $counter <= 10;) {
//   echo "Ini adlaah for loop ke $counter" . PHP_EOL;
//   $counter++;
// }

// Perulangan Dengan Init Statement
// for ($counter = 1; $counter <= 10;) {
//   echo "Ini adlaah for loop ke $counter" . PHP_EOL;
//   $counter++;
// }

// Perulangan Dengan Post Statement
// for ($counter = 1; $counter <= 10; $counter++) {
//   echo "Ini adlaah for loop ke $counter" . PHP_EOL;
// }

// Sytax Alternatif
for ($counter = 1; $counter <= 10; $counter++) :
  echo "Ini adlaah for loop ke $counter" . PHP_EOL;
endfor;
