<?php

$name = "Alfian Yulianto";
$age = 20;

echo "Name : " . $name . PHP_EOL;
echo "Age : " . $age . PHP_EOL;

// Konversi ke Number dan Sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"111";
var_dump($valueInt);

$valueFloat = (float)"21.09";
var_dump($valueFloat);

$valueInt = (int)"Salah";
var_dump($valueInt);  // int(0) karena data tidak valid maka akan berubah menjadi int(0)

$valueFloat = (float)"Salah";
var_dump($valueFloat);  // int(0) karena data tidak valid maka akan berubah menjadi int(0)

// Mengakses Karakter di String
$name = "Alfian";

echo $name[0] . PHP_EOL;  // A
echo $name[1] . PHP_EOL;  // l
echo $name[2] . PHP_EOL;  // f
echo $name[3] . PHP_EOL;  // i
echo $name[4] . PHP_EOL;  // a
echo $name[5] . PHP_EOL;  // n
// echo $name[6] . PHP_EOL;  // error karene melebihi jumlah index di string

// Variabel Parsing
$name = "Alfian";
echo "Hello $name, Selamat Belajar." . PHP_EOL;

//  Curly Brace
$name = "Alfia";
echo "Hello {$name}n, Apa Kabar?" . PHP_EOL;
