<?php
class Person
{
    private $name;
    private $job;

    function __construct($name, $job)
    {
        $this->name = $name;
        $this->job = $job;
    }

    function introduce(){
        echo "氏名：{$this->name}";
        echo "\n";
        echo "職種：{$this->job}";
        echo "\n";
    }
}
