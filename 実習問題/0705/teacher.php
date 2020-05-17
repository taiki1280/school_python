<?php
require_once("person.php");
class Teacher implements Person
{
    private $name;
    private $job;
    private $subject;

    public function __construct($name, $job, $subject)
    {
        $this->name = $name;
        $this->job = $job;
        $this->subject = $subject;
    }

    public function introduce()
    {
        echo "氏名：{$this->name}";
        echo "\n";
        echo "職種：{$this->job}";
        echo "\n";
        echo "担当科目：{$this->subject}";
        echo "\n";
    }
}
