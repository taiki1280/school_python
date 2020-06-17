<?php
// ファイル：toy.php の読み込み
＿＿（24）＿＿;
// TrainToyクラスの定義（Toyクラスを継承）
＿＿（25）＿＿ {
  // インスタンスプロパティ
  // おもちゃの種類
  protected $type;

  // コンストラクタ定義（スーパークラスのコンストラクタをオーバーライド）
  public function __construct($code, $name, $price, $type) {
    // スーパークラスのコンストラクタを呼び出す
    ＿＿（26）＿＿;
    $this->type = $type;  // おもちゃの種類
  }

  // インスタンスメソッド
  // productIntroメソッド（商品紹介）のオーバーライド
  ＿＿（27）＿＿ {
    // スーパークラスのproductIntroを呼び出す
    ＿＿（28）＿＿;
    echo "おもちゃのタイプ = ", $this->type, PHP_EOL;
  }
  // goメソッド（走る）のオーバーライド
  ＿＿（29）＿＿ {
    // スーパークラスの go メソッドを呼び出す
    ＿＿（30）＿＿;
    // TrainToyクラス独自の機能
    echo "ガタンゴトン！ガタンゴトン！", PHP_EOL;
  }
  // hornメソッドの定義
  ＿＿（31）＿＿ {
    echo $this->name, "が警笛を鳴らします！", PHP_EOL;
    echo "プォーーーー！！", PHP_EOL;
  }
}