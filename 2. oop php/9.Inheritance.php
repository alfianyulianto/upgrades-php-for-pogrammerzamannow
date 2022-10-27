<?php

include_once "./data/Manager.php";

$manager = new Maneger();
$manager->name = "Budi";
$manager->sayHello("Joko");


$vp = new VicePresident();
$vp->name = "Indah";
$vp->sayHello("Alfian");
