<?php
class Student
{
    public $name;
    public $age;
    public $grade;
    function __construct($name, $age, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }
    public function hello()
    {
        echo "こんにちは、{$this->name}です。\n";
        echo "年齢は、{$this->age}歳です。\n";
        echo "学年は、{$this->grade}年生です。\n";
    }
}
