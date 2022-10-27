<?php

include_once "./data/Person.php";

$alfian = new Person("Alfian", "Solo");
$alfian->name = "Alfian";
$alfian->sayHello("Budi");

$joko = new Person("Joko", "null");
$joko->name = "Joko";
$joko->sayHello(null);
