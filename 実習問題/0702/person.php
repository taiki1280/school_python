<?php
class Person
{
    private $name;
    private $age;
    private $sex;
    private $height;
    private $weight;

    function __construct($name, $age, $sex, $height, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->height = $height;
        $this->weight = $weight;
    }

    // BMI値
    function getBMI()
    {
        return $this->weight / (($this->height / 100) ** 2);
    }

    // 肥満度
    function getObesity()
    {
        $bmi = $this->getBMI();
        if ($bmi < 18.5) {
            $result = '低体重(痩せ型)';
        } else if ($bmi < 25) {
            $result = '普通体重';
        } else if ($bmi < 30) {
            $result = '肥満(１度)';
        } else if ($bmi < 35) {
            $result = '肥満(２度)';
        } else if ($bmi < 40) {
            $result = '肥満(３度)';
        } else {
            $result = '肥満(４度)';
        }
        // returnの数は3つまでと警告されたので変数に代入
        return $result;
    }

    // 理想体重
    function getIdealWeight()
    {
        return (($this->height / 100) ** 2) * 22;
    }

    function personDisp()
    {
        echo "氏名：{$this->name}";
        echo "\n";
        echo "年齢：{$this->age}";
        echo "\n";
        echo "性別：{$this->sex}";
        echo "\n";
        echo "身長：{$this->height}";
        echo "\n";
        echo "体重：{$this->weight}";
        echo "\n";
    }

    function bmiDisp()
    {
        $bmi = $this->getBMI();
        echo "BMI値 = {$bmi}";
        echo "\n";
    }

    function obesityDisp()
    {
        $obesity = $this->getObesity();
        echo "肥満度判定 = {$obesity}";
        echo "\n";
    }

    function idealWeightDisp()
    {
        $idealWeight = $this->getIdealWeight();
        echo "{$this->name}さんの理想体重 = {$idealWeight}";
        echo "\n";
    }
}
