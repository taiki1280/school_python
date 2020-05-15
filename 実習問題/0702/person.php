<?php
class Person{
    private $name;
    private $age;
    private $sex;
    private $height;
    private $weight;
    function __construct($name,$age,$sex,$height,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->height = $height;
        $this->weight = $weight;
    }
    function getBMI(){

    }
    function getObesity(){
        
    }
}