<?php
// Teacherクラスを定義する
class Teacher
{
    // インスタンスプロパティ
    public $name;
    public $age;
    public $subject;

    // コンストラクタ
    function __construct($name, $age, $subject)
    {
        // プロパティに初期値を設定する
        $this->name = $name;
        $this->age = $age;
        $this->subject = $subject;
    }

    // インスタンスメソッド
    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "\n";
        } else {
            echo "こんにちは、{$this->name}です。", PHP_EOL;
            echo "年齢は、{$this->age}歳です。", PHP_EOL;
            echo "担当科目は、{$this->subject}です。", PHP_EOL;
        }
    }
}
// 
