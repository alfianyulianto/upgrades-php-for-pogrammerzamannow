<?php

namespace Data;

abstract class Animal
{
  public string $name;

  // void artinya sebuah function tidak mengembalikan value
  abstract public function run(): void;
}

class Cat extends Animal
{
  public function run(): void
  {
    echo "Cat $this->name is running" . PHP_EOL;
  }
}

class Dog extends Animal
{
  public function run(): void
  {
    echo "Gog $this->name is running" . PHP_EOL;
  }
}
