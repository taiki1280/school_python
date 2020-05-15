<?php
class Teacher
{
  public $name;
  public $age;
  public $subject;
  function __construct($name, $age, $subject)
  {
    $this->name = $name;
  }
  public function hello()
  {
    echo "こんにちは{$this->name}です";
  }
}
