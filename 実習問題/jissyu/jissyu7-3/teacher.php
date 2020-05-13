<?php
require_once("person.php");
/* Teacherクラスの定義 */
class Teacher extends Person{
    private $subject;  // 担当科目

    
    /* コンストラクタ定義 */
    public function __construct($name, $job,$subject) {
        parent::__construct($name,$job);
        $this->subject = $subject;
    }
    
    /* メソッドの定義 */
    // 担当科目を出力するメソッドの定義
    public function introduce() {
        parent::introduce();
        echo "担当科目：", $this->subject,"<br>",PHP_EOL;
    }
}

?>