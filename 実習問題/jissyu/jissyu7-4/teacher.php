<?php
require_once("person.php");
/* Teacherクラスの定義 */
trait Teacher{
    private $subject;  // 担当科目
    
    /* メソッドの定義 */
    // 担当科目を出力するメソッドの定義
    public function teacher_introduce() {
        echo "担当科目：", $this->subject,"<br>",PHP_EOL;
    }
}

?>