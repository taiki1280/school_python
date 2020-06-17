<?php
// Toyクラスの定義
class Toy
{
  // インスタンスプロパティ
  // 商品コード
  // ＿＿（１）＿＿;
  protected $code;
  // 商品名
  // ＿＿（２）＿＿;
  protected $name;
  // 価格
  // ＿＿（３）＿＿;
  protected $price;

  // コンストラクタ定義
  // ＿＿（４）＿＿ {
  public function __construct($code, $name, $price)
  {
    // インスタンスプロパティに初期値を代入
    $this->code = $code;    // 商品コード
    $this->name = $name;    // 商品名
    $this->price = $price;  // 価格
  }

  // インスタンスメソッド
  // productIntro メソッド定義（商品紹介）
  // ＿＿（５）＿＿ {
  public function productIntro()
  {
    // echo "商品コード = ", ＿＿（６）＿＿, PHP_EOL;
    echo "商品コード = ", $this->code, PHP_EOL;
    // echo "商品名 = ", ＿＿（７）＿＿, PHP_EOL;
    echo "商品名 = ", $this->name, PHP_EOL;
    // echo "価格 = ", ＿＿（８）＿＿, "円", PHP_EOL;
    echo "価格 = ", $this->price, "円", PHP_EOL;
  }
  // go メソッド定義（走る）
  // ＿＿（９）＿＿ {
  function go()
  {
    // echo ＿＿（10）＿＿, "が走ります！", PHP_EOL;
    echo $this->name, "が走ります！", PHP_EOL;
  }
}
