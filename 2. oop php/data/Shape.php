<?php

namespace Data;

class Shape
{
  public function getCorner(): int
  {
    return 0;
  }
}

class Rectangel extends Shape
{
  // Overriding
  public function getCorner(): int
  {
    return 4;
  }

  // Parent Keyword
  public function getParentCorner(): int
  {
    return parent::getCorner();
  }
}
