<?php
require_once "teacher.php";
class Person
{
    private $name;
    private $job;
    use Teacher;

    function __construct($name, $job,$subject)
    {
        $this->name = $name;
        $this->job = $job;
        $this->subject = $subject;
    }

    function person_introduce(){
        echo "氏名：{$this->name}";
        echo "\n";
        echo "職種：{$this->job}";
        echo "\n";
    }
}
