<?php

namespace Lib;

class Lecturer
{
  public $surname;

  public $firstname;

  public $office;

  public $phone;

  public function __construct($surname, $firstname, $office = null, $phone = null)
  {
    $this->surname = $surname;
    $this->firstname = $firstname;
    $this->office = $office;
    $this->phone = $phone;
  }
}
