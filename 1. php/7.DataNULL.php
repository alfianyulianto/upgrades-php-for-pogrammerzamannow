<?php

$name = "Alfian";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Mengecek tipe data null -> is_null($variable)
echo "Is Name Null? : ";
echo is_null($name);
echo "\n";

echo is_null($variabletidakada); // akan error karena variable belus di definisikan

// Menghapus Variable
$contoh = "Alfian";
unset($contoh);

// echo $contoh;  // error
echo is_null($contoh); // 1
echo "\n";

// Function isset($variable)(
$contoh = "Yulianto";
$contoh = null;
echo "isset : ";
echo "\n";
var_dump(isset($contoh));
