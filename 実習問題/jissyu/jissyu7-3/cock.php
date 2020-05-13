<?php
require_once("person.php");
/* Cockクラスの定義 */
class Cock extends Person{
    private $specialties;  // 担当料理

    
    /* コンストラクタ定義 */
    public function __construct($name, $job,$specialties) {
        parent::__construct($name,$job);
        $this->specialties = $specialties;
    }
    
    /* メソッドの定義 */
    // 得意料理を出力するメソッドの定義
    public function introduce() {
        parent::introduce();
        echo "得意料理：",$this->specialties,"<br>",PHP_EOL;
    }
}

?>