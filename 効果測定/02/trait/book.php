<?php
// taxpricecalc.php を読み込む
// ＿＿＿（１）＿＿＿;
require_once 'taxpricecalc.php';
// Bookクラス（書籍）の定義
// ＿＿＿（２）＿＿＿ {
Class Book {
  // トレイト TaxPriceCalc を取り込む
  // ＿＿＿（３）＿＿＿;
  use TaxPriceCalc;

  // インスタンスプロパティ
  private $title; // 題名
  private $author;  // 著者
  private $publisher;  // 出版社
  private $isbn;  // ISBN

  // コンストラクタ
  // ＿＿＿（４）＿＿＿ {
  public function __construct($title,$author,$publisher,$isbn,$price)
  {
    $this->title = $title;  // 書名
    $this->author = $author;  // 著者名
    $this->publisher = $publisher;  // 出版社
    $this->isbn = $isbn; // ISBN
    $this->price = $price; // 定価
  }

  // インスタンスメソッド
  // bookInfoDisp メソッドの定義（書籍情報を表示する）
  // ＿＿＿（５）＿＿＿ {
  public function bookInfoDisp()
  {
    echo "書名：", $this->title, PHP_EOL; // 書名を表示
    echo "著者：", $this->author, PHP_EOL;  // 著者を表示
    echo "出版社：", $this->publisher, PHP_EOL; // 出版社を表示
    echo "ISBN：", $this->isbn, PHP_EOL;  // ISBNを表示
    echo "定価：", $this->price, "円", PHP_EOL; // 定価を表示
  }
}