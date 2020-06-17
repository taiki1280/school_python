<?php
// taxpricecalc.php を読み込む
// ＿＿＿（６）＿＿＿;
require_once 'taxpricecalc.php';
// DVDクラスの定義
// ＿＿＿（７）＿＿＿ {
Class DVD {
  // トレイト TaxPriceCalc を取り込む
  // ＿＿＿（８）＿＿＿;
  use TaxPriceCalc;

  // インスタンスプロパティ
  private $title; // 題名
  private $director;  // 監督
  private $distributor;  // 販売元
  private $jan;  // JAN

  // コンストラクタ
  // ＿＿＿（９）＿＿＿ {
  public function __construct($title,$director,$distributor,$jan,$price)
  {
    $this->title = $title;  // 題名
    $this->director = $director;  // 監督
    $this->distributor = $distributor;  // 販売元
    $this->jan = $jan; // JAN
    $this->price = $price; // 定価
  }

  // インスタンスメソッド
  // DVDInfoDisp メソッドの定義（DVDを表示する）
  // ＿＿＿（10）＿＿＿ {
  public function DVDInfoDisp()
  {
    echo "題名：", $this->title, PHP_EOL; // 題名を表示
    echo "監督：", $this->director, PHP_EOL;  // 監督を表示
    echo "販売元：", $this->distributor, PHP_EOL; // 販売元を表示
    echo "JAN：", $this->jan, PHP_EOL;  // JANを表示
    echo "定価：", $this->price, "円", PHP_EOL; // 定価を表示
  }
}