<?php

namespace Lib;

class Programme
{
  public $name;

  public $lecturer;

  public function __construct($name, Lecturer $lecturer = null)
  {
    $this->name = $name;
    $this->lecturer = $lecturer;
  }

  public function __toString()
  {
    return $this->name;
  }
}
