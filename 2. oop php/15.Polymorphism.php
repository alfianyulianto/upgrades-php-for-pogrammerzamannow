<?php

include_once "./data/Programmer.php";
include_once "./data/Manager.php";

$company = new Company();
$company->programmer = new Programmer("Alfian");
var_dump($company);

$company->programmer = new FrontendProgrammer("Budi");
var_dump($company);

$company->programmer = new BackendProgrammer("Indah");
var_dump($company);

// $company->programmer = new Manager(); //error karena type object yang dimasukan ke properties $company->programmer harus programmer


// Function Argument Polymorphism
$company->sayHelloPrpgrammer(new Programmer("Alfian"));
$company->sayHelloPrpgrammer(new BackendProgrammer("David"));
