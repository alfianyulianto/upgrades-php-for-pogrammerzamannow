<?php

class Maneger
{
  var string $name;

  // Constructor Overriding
  var string $title;
  public function __construct(string $name = "", string $title = "Maneger")
  {
    $this->name = $name;
    $this->title = $title;
  }

  // kata kunci void digunakan untuk sebuah function tidak mengembalikan value
  function sayHello(string $name): void
  {
    echo "Hi $name, my name is Maneger $this->name" . PHP_EOL;
  }
}

class VicePresident extends Maneger
{
  // Parent Overriding
  public function __construct(string $name = "")
  {
    // ini tidak wajib, tapi direkomendasikan
    parent::__construct($name, "VP");
  }

  // Overriding 
  function sayHello(string $name): void
  {
    echo "Hi $name, my name is VP $this->name" . PHP_EOL;
  }
}
