<?php
/* Personクラスの定義 */
class Person {
    private $name;  // 氏名
    private $job;   // 職種

    
    /* コンストラクタ定義 */
    public function __construct($name, $job) {
        $this->name = $name;
        $this->job = $job;
    }
    
    /* メソッドの定義 */
    // 氏名、職種を出力するメソッドの定義
    public function introduce() {
        echo "氏名：", $this->name,"<br>",PHP_EOL;
        echo "職種：", $this->job,"<br>",PHP_EOL;
    }
}

?>