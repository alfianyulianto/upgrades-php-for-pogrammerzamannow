<?php

class Person
{
  // Constant
  const AUTHOR = "AY-Blog";

  // Properties
  // Type Declaration Peoperties
  var string $name;
  // Nullable Properties
  // var string $address = null; //erro karena ketika set string menjadi null tidak boleh
  var ?string $address = null;
  //  Default Value Properties 
  var string $country = "Indonesia";

  // Constructor
  public function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  // Function 
  // This Keywords
  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is $this->name" . PHP_EOL;
    } else {
      echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
  }

  // Self Keywords
  function info()
  {
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
  }

  function __destruct()
  {
    echo "Object person $this->name is destroyed" . PHP_EOL;
  }
}
