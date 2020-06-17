<?php
// Bookクラス（書籍）の定義
// ＿＿＿（１）＿＿＿ {
class Book
{
  // インスタンスプロパティ定義
  private $title; // 書名
  private $author;  // 著者名
  private $publisher;  // 出版社
  private $isbn;  // ISBN
  private $price; // 定価

  // コンストラクタ定義
  // ＿＿＿（２）＿＿＿ {
  function __construct($title, $author, $publisher, $isbn, $price)
  {
    $this->title = $title;  // 書名
    $this->author = $author;  // 著者名
    $this->publisher = $publisher;  // 出版社
    $this->isbn = $isbn; // ISBN
    $this->price = $price; // 定価
  }

  // インスタンスメソッド定義
  // bookInfoDisp メソッドの定義（書籍情報を表示する）
  // ＿＿＿（３）＿＿＿ {
  function bookInfoDisp()
  {
    echo "書名：", $this->title, PHP_EOL; // 書名を表示
    echo "著者：", $this->author, PHP_EOL;  // 著者を表示
    echo "出版社：", $this->publisher, PHP_EOL; // 出版社を表示
    echo "ISBN：", $this->isbn, PHP_EOL;  // ISBNを表示
    echo "定価：", $this->price, "円", PHP_EOL; // 定価を表示
  }

  // taxPrice メソッドの定義（税込み価格を求める）
  // ＿＿＿（４）＿＿＿ {
  function taxPrice($taxRate)
  {
    // 税率に従い税込み価格を計算し、返す
    return $this->price * (1 + $taxRate / 100);
  }
}
