<?php
 // Person クラスを定義したファイルの読み込み
 require 'person.php';
 
 /* オブジェクトを利用した処理 */
 // ユーザ定義コンストラクタを使用したインスタンス（オブジェクト）の生成
 $data1 = new Person('鈴木一郎', 46, '男性', 180.3, 79.4);

 // 各種情報の処理と表示
 // プロパティの表示
 $data1->personDisp();
 // BMI 値の表示
 $data1->bmiDisp();
 // 肥満度の表示
 $data1->obesityDisp();
 // 理想体重の表示
 $data1->idealWeightDisp();

?>