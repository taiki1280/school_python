<!--
  問題２
    Toyクラス、CarToyクラス、PatrolCarToyクラス、TrainToyクラス
    をクラス図をもとに実装し、下記の実行結果となるように
    未完成コードの空欄部分を埋めてプログラムを完成させてください。
    ファイル名：
      Toyクラス：toy.php
      CarToyクラス：cartoy.php
      PatrolCarToyクラス：patrolcartoy.php
      TrainToyクラス：traintoy.php
      実行プログラム：main.php
-->
<?php
// クラスファイルを読み込む
require_once("toy.php"); // toy.phpの読み込み
require_once("cartoy.php"); // cartoy.phpの読み込み
require_once("patrolcartoy.php"); // patrolcartoy.phpの読み込み
require_once("traintoy.php"); // traintoy.phpの読み込み
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>効果測定</title>
</head>

<body>
  <pre>
<?php
// インスタンス化
// CarToyクラスをインスタンス化
$car = new CarToy("TOY0001", "クルマのおもちゃ", 1500, "クルマ");
// PatrolCarToyクラスをインスタンス化
$patrol = new PatrolCarToy("TOY0003", "パトロールカーのおもちゃ", 3500, "クルマ");
// TrainToyクラスをインスタンス化
$train = new TrainToy("TOY0002", "電車のおもちゃ", 2200, "電車");

// メソッドを実行する

// メソッド productIntro を呼び出し商品を紹介
// クルマのおもちゃの紹介
$car->productIntro();
echo PHP_EOL;
// パトロールカーのおもちゃの紹介
$patrol->productIntro();
echo PHP_EOL;
// 電車のおもちゃの紹介
$train->productIntro();
echo PHP_EOL;

// 各種おもちゃを走らせる（go メソッドを呼び出す）
// クルマのおもちゃ
$car->go();
echo PHP_EOL;
// パトロールカーのおもちゃ
$patrol->go();
echo PHP_EOL;
// 電車のおもちゃ
$train->go();
echo PHP_EOL;

// クルマのおもちゃのライトをつける（light メソッドを呼び出す）
$car->light();
echo PHP_EOL;
// パトロールカーのおもちゃのライトをつける（light メソッドを呼び出す）
$patrol->light();
echo PHP_EOL;
// パトロールカーのおもちゃのサイレンを鳴らす（sirenメソッドを呼び出す）
$patrol->siren();
echo PHP_EOL;
// 電車のおもちゃの警笛を鳴らす（horn メソッドを呼び出す）
$train->horn();
echo PHP_EOL;
?>
</pre>
</body>

</html>