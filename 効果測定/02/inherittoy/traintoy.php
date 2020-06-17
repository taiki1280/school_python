<?php
// ファイル：toy.php の読み込み
// ＿＿（24）＿＿;
require_once 'toy.php';
// TrainToyクラスの定義（Toyクラスを継承）
// ＿＿（25）＿＿ {
class TrainToy extends Toy
{
  // インスタンスプロパティ
  // おもちゃの種類
  protected $type;

  // コンストラクタ定義（スーパークラスのコンストラクタをオーバーライド）
  public function __construct($code, $name, $price, $type)
  {
    // スーパークラスのコンストラクタを呼び出す
    // ＿＿（26）＿＿;
    parent::__construct($code, $name, $price);
    $this->type = $type;  // おもちゃの種類
  }

  // インスタンスメソッド
  // productIntroメソッド（商品紹介）のオーバーライド
  // ＿＿（27）＿＿ {
  public function productIntro()
  {
    // スーパークラスのproductIntroを呼び出す
    // ＿＿（28）＿＿;
    parent::productIntro();
    echo "おもちゃのタイプ = ", $this->type, PHP_EOL;
  }
  // goメソッド（走る）のオーバーライド
  // ＿＿（29）＿＿ {
  public function go()
  {
    // スーパークラスの go メソッドを呼び出す
    // ＿＿（30）＿＿;
    parent::go();
    // TrainToyクラス独自の機能
    echo "ガタンゴトン！ガタンゴトン！", PHP_EOL;
  }
  // hornメソッドの定義
  // ＿＿（31）＿＿ {
  public function horn()
  {
    echo $this->name, "が警笛を鳴らします！", PHP_EOL;
    echo "プォーーーー！！", PHP_EOL;
  }
}
