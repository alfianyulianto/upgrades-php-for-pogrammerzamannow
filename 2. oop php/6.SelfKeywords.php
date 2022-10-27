<?php

include_once "./data/Person.php";

$alfian = new Person("Alfian", "Solo");
$alfian->info();

$joko = new Person("Joko", null);
$joko->info();
