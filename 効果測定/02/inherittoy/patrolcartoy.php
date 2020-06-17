<?php
// ファイル cartoy.php を読み込む
// ＿＿（19）＿＿;
require_once 'cartoy.php';
// PatrolCarToyクラスの定義（CarToyクラスを継承）
// ＿＿（20）＿＿ {
Class PatrolCarToy extends CarToy {
  // コンストラクタ定義（スーパークラスのコンストラクタを呼び出す）
  public function __construct($code, $name, $price, $type) {
    // ＿＿（21）＿＿;
    parent::__construct($code,$name,$price,$type);
  }

  // インスタンスメソッド定義
  // goメソッド（走る）の定義（オーバーライド）
  // ＿＿（22）＿＿ {
  public function go()
  {
    echo $this->name, "が走ります！", PHP_EOL;
    echo "うーうーうー！ブロロローーー！！", PHP_EOL;
  }
  // sirenメソッド（サイレンを鳴らす）
  // ＿＿（23）＿＿ {
  public function siren()
  {
    echo $this->name, "がサイレンを鳴らします！", PHP_EOL;
    echo "ウーウー！！ウーウー！！ウー！！！", PHP_EOL;
  }
}