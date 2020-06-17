<?php
// ファイル：toy.php の読み込み
＿＿（11）＿＿;
// CarToy クラスの定義（Toy クラスを継承）
＿＿（12）＿＿ {
  // インスタンスプロパティ
  // おもちゃの種類
  protected $type;

  // コンストラクタ定義（スーパークラスのコンストラクタをオーバーライド）
  public function __construct($code, $name, $price, $type) {
    // スーパークラスのコンストラクタを呼び出す
    ＿＿（13）＿＿;
    $this->type = $type;  // おもちゃの種類
  }

  // インスタンスメソッド
  // productIntroメソッド（商品紹介）のオーバーライド
  ＿＿（14）＿＿ {
    // スーパークラスのproductIntroを呼び出す
    ＿＿（15）＿＿;
    echo "おもちゃのタイプ = ", $this->type, PHP_EOL;
  }
  // goメソッド（走る）のオーバーライド
  ＿＿（16）＿＿ {
    // スーパークラスの go メソッドを呼び出す
    ＿＿（17）＿＿;
    // CarToyクラス独自の機能
    echo "ブロロローーー！！", PHP_EOL;
  }
  // light メソッド定義（ライトをつける）
  ＿＿（18）＿＿ {
    echo $this->name, "がライトをつけます！", PHP_EOL;
    echo "ピカーーーー！！", PHP_EOL;
  }
}