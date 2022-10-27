<?php

include "./data/Programmer.php";

$company = new Company();
$company->sayHelloPrpgrammer(new Programmer("Alfian"));

$company->sayHelloPrpgrammer(new BackendProgrammer("Alfian"));

$company->sayHelloPrpgrammer(new FrontendProgrammer("Alfian"));
