<?php

$first = [
  "first_name" => "Alfian"
];
$last = [
  "last_name" => "Yulianto"
];
$full = $first + $last;
var_dump($full); //["first_name" => "Alfian", "last_name" => "Yulianto"];

$first = [
  "first_name" => "Alfian"
];
$last = [
  "first_name" => "Budi",
  "last_name" => "Yulianto"
];
$full = $first + $last;
var_dump($full); //["first_name" => "Alfian", "last_name" => "Yulianto"];
$full = $last + $first;
var_dump($full); //["first_name" => "Budi", "last_name" => "Yulianto"];


$a = [
  "first_name" => "Alfian",
  "last_name" => "Yulianto"
];
$b = [
  "last_name" => "Yulianto",
  "first_name" => "Alfian"
];
var_dump($a == $b); //true
var_dump($a === $b); //false
