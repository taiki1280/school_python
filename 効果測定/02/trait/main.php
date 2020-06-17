<?php
// クラスファイルを読み込む
// ＿＿＿（13）＿＿＿;
require_once 'book.php';
// ＿＿＿（14）＿＿＿;
require_once 'dvd.php';
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
// Bookクラスをインスタンス化
// $book = ＿＿＿（15）＿＿＿(
$book = new Book(
  "詳細! PHP 7+MySQL 入門ノート ",
  "大重 美幸",
  "ソーテック社",
  "978-4800711304",
  2980
);
// DVDクラスをインスタンス化
// $dvd = ＿＿＿（16）＿＿＿(
$dvd = new DVD(
  "インターステラー",
  "クリストファー・ノーラン",
  "ワーナー・ブラザース・ホームエンターテイメント",
  "4548967218169",
  1000
);

// メソッドを実行する
// メソッド bookInfoDisp を呼び出し書籍情報を表示
// ＿＿＿（17）＿＿＿;
$book->bookInfoDisp();
// メソッド taxPrice を呼び出し１０％の消費税込み価格を表示
// echo "税込み価格 = ", ＿＿＿（18）＿＿＿, "円", PHP_EOL;
echo "税込み価格 = ", $book->taxPrice(10), "円", PHP_EOL;
echo PHP_EOL;
// メソッド DVDInfoDisp を呼び出しDVD情報を表示
// ＿＿＿（19）＿＿＿;
$dvd->DVDInfoDisp();
// メソッド taxPrice を呼び出し１０％の消費税込み価格を表示
// echo "税込み価格 = ", ＿＿＿（20）＿＿＿, "円", PHP_EOL;
echo "税込み価格 = ", $dvd->taxPrice(10), "円", PHP_EOL;
?>
</pre>
</body>

</html>