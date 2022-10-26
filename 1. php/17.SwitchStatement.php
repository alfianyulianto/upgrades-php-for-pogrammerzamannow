<?php

$nilai = "F";
switch ($nilai) {
  case "A":
    echo "Anda lulu dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

// Sytax Alternatif
switch ($nilai):
  case "A":
    echo "Anda lulu dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;
