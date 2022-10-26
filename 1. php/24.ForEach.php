<?php

$names = ["Alfian", "Diah", "David"];

for ($i = 0; $i < count($names); $i++) {
  echo "Date ke $i = " . $names[$i] . PHP_EOL;
}

foreach ($names as $name) {
  echo "Hello $name" . PHP_EOL;
}

foreach ($names as $index => $name) {
  echo "data ke $index = $name" . PHP_EOL;
}


// For Each dengan Key
$person = [
  "first_name" => "Alfian",
  "middle_name" => "Putra",
  "last_name" => "Yulianto"
];

foreach ($person as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
