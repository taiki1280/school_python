<?php
trait Teacher
{
    private $subject;
    function teacher_introduce()
    {
        echo "担当科目：{$this->subject}<br>\n";
    }
}
