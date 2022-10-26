<?php
$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Alfian", "Diah", "Jihan", "David"];
var_dump($names);

var_dump($names[0]); // Alfian

$names[0] = "Budi";
var_dump($names[0]); // Budi

unset($names[1]);
var_dump($names);

$names[] = "Yulianto";
var_dump($names);

var_dump(count($names));

// Map
$alfian = array(
  "id" => "alfian",
  "name" => "Alfian Yulianto",
  "age" => 22
);

var_dump($alfian);

var_dump($alfian['name']);

$budi = [
  "id" => "budi",
  "name" => "Budi Doremi",
  "age" => 30
];

var_dump($budi);

// Array di dalam Array
$diah = array(
  "id" => "diah",
  "name" => "Diah Ramadhani",
  "age" => 22,
  "address" => array(
    "city" => "Solo",
    "country" => "Indonesia"
  )
);
var_dump($diah);

var_dump($diah["address"]["city"]);  // Solo
