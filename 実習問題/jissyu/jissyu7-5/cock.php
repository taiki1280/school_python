<?php
require_once("person.php");
/* Cockクラスの定義 */
class Cock implements Person{
    private $name;  // 氏名
    private $job;   // 職種
    private $specialties;  // 担当料理

    
    /* コンストラクタ定義 */
    public function __construct($name, $job,$specialties) {
        $this->name = $name;
        $this->job = $job;
        $this->specialties = $specialties;
    }
    
    /* メソッドの定義 */
    // 得意料理を出力するメソッドの定義
    public function introduce() {
        echo "氏名：", $this->name,"<br>",PHP_EOL;
        echo "職種：", $this->job,"<br>",PHP_EOL;
        echo "得意料理：",$this->specialties,"<br>",PHP_EOL;
    }
}

?>