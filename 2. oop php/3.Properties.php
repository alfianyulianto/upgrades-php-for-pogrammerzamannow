<?php

include_once "./data/Person.php";

$person = new Person("Alfian", "Solo");
$person->name = "Alfian";
$person->address = "Solo";
$person->country = "Indonesia";

var_dump($person);

echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

$person2 = new Person("Budi", "Subang");
$person2->name = "Budi";
$person2->address = "Subang";
$person2->country = "Indonesia";

var_dump($person2);


// Type Declaration Properties
// $person2->name = []; // error karena di properties name kita beri type declaration string

// Default Value Peoperties 
$person3 = new Person("David", "Kudus");
$person3->name = "David";
$person3->address = "Kudus";

var_dump($person3);

// Nullable Properties
$person4 = new Person("Indah", "null");
$person4->name = "Indah";
$person4->address = null;
// $person4->country = null; //error karena ketika sebuah peoprti dengan type declaration maka tidak bisa dimasukan null

var_dump($person4);
