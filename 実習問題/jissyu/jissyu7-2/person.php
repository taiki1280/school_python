<?php
/* 個人情報を管理するクラスの定義 */
class Person {
    /* プロパティの定義 */
    // 個人情報（健康管理）
    private $name; // 氏名
    private $age; // 年齢
    private $sex; // 性別
    private $height; // 身長
    private $weight; // 体重
    
    /* コンストラクタ定義 */
    public function __construct($name, $age, $sex, $height, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    /* メソッドの定義 */
    
    // 健康管理に関する各種メソッドの定義
    // BMI 値を求めるメソッドの定義
    public function getBMI() {
        $mh = $this->height / 100;
        return $this->weight / ($mh * $mh);
    }
    // 肥満度を求めるメソッドの定義
    /*
    肥満度
    低体重 １８．５未満
    普通体重 １８．５以上、２５．０未満
    肥満度 I ２５．０以上、３０．０未満
    肥満度 II ３０．０以上、３５．０未満
    肥満度 I ３５．０以上、４０．０未満
    肥満度 IV ４０．０以上
    */
    public function getObesity() {
        $bmi = $this->getBMI();
        if ($bmi < 18.5) {return -1;} // 低体重
        else if ($bmi < 25) {return 0;} // 普通体重
        else if ($bmi < 30) {return 1;} // 肥満度 I
        else if ($bmi < 35) {return 2;} // 肥満度 II
        else if ($bmi < 40) {return 3;} // 肥満度 III
        else {return 4;} // 肥満度 IV
    }
    
    // 理想体重を求めるメソッドの定義
    public function getIdealWeight() {
        $mh = $this->height / 100;
        return $mh * $mh * 22;
    }

    // オブジェクト表示関数の personDisp の定義
    
    function personDisp() {
        // 氏名を表示する
        echo "氏名：", $this->name,"<br>",PHP_EOL;
        // 年齢を表示する
        echo "年齢：", $this->age,"<br>", PHP_EOL;
        // 性別を表示する
        echo '性別：', $this->sex,"<br>",PHP_EOL;
        // 身長を表示する
        echo '身長：', $this->height,"<br>",PHP_EOL;
        // 体重を表示する
        echo '体重：', $this->weight,"<br>",PHP_EOL;
    }

    // BMI 値を表示する関数 bmiDisp の定義
    function bmiDisp() {
        echo 'BMI 値 = ', $this->getBMI(),"<br>",PHP_EOL;
    }
    // 肥満度を表示する関数 obesityDisp の定義
    
    function obesityDisp() {
        switch ($this->getObesity()) {
            case -1:
                $obe = '低体重';
            break;
            case 0:
                $obe = '普通体重';
            break;
            case 1:
                $obe = '肥満度１';
            break;
            case 2:
                $obe = '肥満度２';
            break;
            case 3:
                $obe = '肥満度３';
            break;
            case 4:
                $obe = '肥満度４';
            break;
        }
        echo '肥満度判定：', $obe,"<br>",PHP_EOL;
    }
    // 理想体重を表示する関数 idealWeightDisp の定義

    function idealWeightDisp() {
        echo $this->name, 'さんの理想体重 = ',
        $this->getIdealWeight(),"<br>",PHP_EOL;
    }
}

?>