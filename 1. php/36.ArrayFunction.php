<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Array Map
$dataResult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataResult);

// Sort
rsort($data);
var_dump($data);

// Array Keys
$person = [
  "first_name" => "Alfian",
  "last_name" => "Yulianto"
];

var_dump(array_keys($person));

// Array Values
var_dump(array_values($person));
