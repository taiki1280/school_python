<?php
require_once "person.php";
class Teacher extends Person
{
    private $subject;
    function __construct($name, $job, $subject)
    {
        parent::__construct($name, $job);
        $this->subject = $subject;
    }
    function introduce()
    {
        parent::introduce();
        echo "担当科目：{$this->subject}";
        echo "\n";
    }
}
