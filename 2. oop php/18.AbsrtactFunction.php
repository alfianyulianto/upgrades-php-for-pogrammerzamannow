<?php

include_once "./data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Molly";
$cat->run();

$dog = new Dog();
$dog->name = "Curdi";
$dog->run();
