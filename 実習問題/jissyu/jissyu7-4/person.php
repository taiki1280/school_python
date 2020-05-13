<?php
// トレイトをしたいクラスの読み込み
 require_once("teacher.php");
 require_once("cock.php");

/* Personクラスの定義 */
class Person {
    use teacher,cock;
    private $name;  // 氏名
    private $job;   // 職種

    
    /* コンストラクタ定義 */
    public function __construct($name, $job,$subject) {
        $this->name = $name;
        $this->job = $job;
        $this->subject = $subject;
    }
    
    /* メソッドの定義 */
    // 氏名、職種を出力するメソッドの定義
    public function person_introduce() {
        echo "氏名：", $this->name,"<br>",PHP_EOL;
        echo "職種：", $this->job,"<br>",PHP_EOL;
    }
}

?>