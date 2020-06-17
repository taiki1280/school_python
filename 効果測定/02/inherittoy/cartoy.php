<?php
// ファイル：toy.php の読み込み
// ＿＿（11）＿＿;
require_once 'toy.php';
// CarToy クラスの定義（Toy クラスを継承）
// ＿＿（12）＿＿ {
class CarToy extends Toy
{
  // インスタンスプロパティ
  // おもちゃの種類
  protected $type;

  // コンストラクタ定義（スーパークラスのコンストラクタをオーバーライド）
  public function __construct($code, $name, $price, $type)
  {
    // スーパークラスのコンストラクタを呼び出す
    // ＿＿（13）＿＿;
    parent::__construct($code, $name, $price);
    $this->type = $type;  // おもちゃの種類
  }

  // インスタンスメソッド
  // productIntroメソッド（商品紹介）のオーバーライド
  // ＿＿（14）＿＿ {
    
  public function productIntro()
  {
    // スーパークラスのproductIntroを呼び出す
    // ＿＿（15）＿＿;
    parent::productIntro();
    echo "おもちゃのタイプ = ", $this->type, PHP_EOL;
  }
  // goメソッド（走る）のオーバーライド
  // ＿＿（16）＿＿ {
  public function go()
  {
    // スーパークラスの go メソッドを呼び出す
    // ＿＿（17）＿＿;
    parent::go();
    // CarToyクラス独自の機能
    echo "ブロロローーー！！", PHP_EOL;
  }
  // light メソッド定義（ライトをつける）
  // ＿＿（18）＿＿ {
  public function light()
  {
    echo $this->name, "がライトをつけます！", PHP_EOL;
    echo "ピカーーーー！！", PHP_EOL;
  }
}
