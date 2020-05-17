<?php
require_once "person.php";
class Cock implements Person
{
    private $name;
    private $job;
    private $specialties;

    public function __construct($name, $job, $specialties)
    {
        $this->name = $name;
        $this->job = $job;
        $this->specialties = $specialties;
    }

    public function introduce()
    {
        echo "氏名：{$this->name}";
        echo "\n";
        echo "職種：{$this->job}";
        echo "\n";
        echo "得意料理：{$this->specialties}";
        echo "\n";
    }
}
