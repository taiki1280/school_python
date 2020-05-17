<?php
require_once "person.php";
class Cock extends Person
{
    private $specialties;
    function __construct($name, $job, $specialties)
    {
        parent::__construct($name, $job);
        $this->specialties = $specialties;
    }
    function introduce()
    {
        parent::introduce();
        echo "得意料理：{$this->specialties}";
        echo "\n";
    }
}
