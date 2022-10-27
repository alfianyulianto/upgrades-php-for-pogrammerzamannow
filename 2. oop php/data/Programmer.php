<?php

class Programmer
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class FrontendProgrammer extends Programmer
{
}

class BackendProgrammer extends Programmer
{
}

class Company
{
  // Programmer : merupakan type object yang harus dimasukan ke dalam sebuah instance object compant harus bertipe object Programmer
  public Programmer $programmer;

  // Function Argument Polymorphism
  public function sayHelloPrpgrammer(Programmer $programmer)
  {
    // echo "Hello programmer $programmer->name" . PHP_EOL;

    // Type Check And Casts
    if ($programmer instanceof BackendProgrammer) {
      echo "Hello BackendProgrammer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
      echo "Hello FrontendProgrammer $programmer->name" . PHP_EOL;
    } else {
      echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
  }
}
