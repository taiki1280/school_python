<?php
require_once("person.php");
/* Teacherクラスの定義 */
class Teacher implements Person{
    private $name;  // 氏名
    private $job;   // 職種
    private $subject;  // 担当科目

    
    /* コンストラクタ定義 */
    public function __construct($name, $job,$subject) {
        $this->name = $name;
        $this->job = $job;
        $this->subject = $subject;
    }
    
    /* メソッドの定義 */
    // 担当科目を出力するメソッドの定義
    public function introduce() {
        echo "氏名：", $this->name,"<br>",PHP_EOL;
        echo "職種：", $this->job,"<br>",PHP_EOL;
        echo "担当科目：", $this->subject,"<br>",PHP_EOL;
    }
}

?>