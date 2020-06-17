<?php
// TaxPriceCalcトレイトの定義
＿＿＿（11）＿＿＿ {
  // フィールド定義
  private $price; // 定価

  // メソッド定義
  // taxPrice メソッド（消費税率をもとに税込み価格を計算し返す）
  ＿＿＿（12）＿＿＿ {
    // 消費税率をもとに税込み価格を計算し消す
    return $this->price * (1 + $taxRate / 100);
  }
}
?>