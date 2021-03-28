<?php

namespace App;

class MyCustomLogic
{
  protected $baseNumber;

  public function __construct($baseNumber)
  {
    $this->baseNumber = $baseNumber;
  }

  public function add($num)
  {
    return $this->baseNumber + $num;
  }
}