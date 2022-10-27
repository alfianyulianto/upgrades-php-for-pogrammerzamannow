<?php
include_once "./data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSSION . PHP_EOL;

// Mengakses constant di CLass
echo Person::AUTHOR . PHP_EOL;
