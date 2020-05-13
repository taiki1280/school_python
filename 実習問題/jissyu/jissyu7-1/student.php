<?php
// Studentクラスを定義する
class Student {
  // インスタンスプロパティ
  public $name;
  public $age;
  public $grade;

  // コンストラクタ
  function __construct($name, $age ,$grade){
    // プロパティに初期値を設定する
    $this->name = $name;
    $this->age = $age;
    $this->grade = $grade;
  }

  // インスタンスメソッド
  public function hello() {
    if (is_null($this->name)) {
      echo "こんにちは！", "\n";
    } else {
      echo "こんにちは、{$this->name}です。",PHP_EOL;
      echo "年齢は、{$this->age}歳です。",PHP_EOL;
      echo "学年は、{$this->grade}年生です。",PHP_EOL;
    }
  }
}
// ?>
