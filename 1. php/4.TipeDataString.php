<?php
echo 'Nama : ';
echo 'Alfian Yulianto';
echo "\n";

echo "Nama : ";
echo "Alfian \t\"Yulianto\"";
echo "\n";

// Heredoc
echo <<<FIAN
Ini adalah contoh string yang sangat 
panjang, dan juga perlu ngetik ENTER secara 
manual, "bisa quote" juga
FIAN;

echo "\n";

// Nowdoc
echo <<<'FIAN'
  Ini adalah contoh string yang sangat 
panjang, dan juga perlu ngetik ENTER secara 
manual, "tidak bisa quote" juga
FIAN;
