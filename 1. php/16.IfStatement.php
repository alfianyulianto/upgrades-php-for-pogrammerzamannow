<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 60 && $absen >=  60) {
  echo "Selamat Anda Lulus" . PHP_EOL;
} else {
  echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}

// Elseif Statement
if ($nilai >= 80 && $absen >= 80) {
  echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
  echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
  echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
  echo "Nilai Anda D" . PHP_EOL;
} else {
  echo "Nilai Anda E" . PHP_EOL;
}

// Sytax Alternatif
if ($nilai >= 80 && $absen >= 80) :
  echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
  echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
  echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
  echo "Nilai Anda D" . PHP_EOL;
else :
  echo "Nilai Anda E" . PHP_EOL;
endif;
