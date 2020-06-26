/*
今回のプログラムは、データベースinventoryの
テーブルgoodsに対して、ブランド名で検索することにより、
該当レコードを検索して表示するものです。
問題の実行結果となるように、未完成プログラムの空欄部分を埋めて
プログラムを完成させてください。
なお、プログラム名は
入力フォーム：kouka_sokutei3_2.php
検索プログラム：select_goods.php
とします。
*/

<?php
require_once("util.php");
$gobackURL = "kouka_sokuei3_2.php";

// データベースユーザ
$user = 'root';
$password = '';
// 利用するデータベース
$dbName = 'inventory';
// MySQLサーバ
$host = 'localhost:3306';
// MySQLのDSN文字列
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
//MySQLデータベースに接続する
try {
  // $pdo = ＿＿＿（１）＿＿＿;
  $pdo = new PDO($dsn, $user, $password);
  // プリペアドステートメントのエミュレーションを無効にする
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // 例外がスローされる設定にする
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // ブランドテーブルからブランドIDとブランド名を取り出す
  // $sql = "＿＿＿（２）＿＿＿";
  $sql = "SELECT id,name FROM brand";

  // プリペアドステートメントを作る
  // $stm = ＿＿＿（３）＿＿＿;
  $stm = $pdo->prepare($sql);
  // SQLクエリを実行する
  // ＿＿＿（４）＿＿＿;
  $stm->execute();
  // 結果の取得（連想配列で受け取る）
  // $result = ＿＿＿（５）＿＿＿;
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  $err =  '<span class="error">エラーがありました。</span><br>';
  $err .= $e->getMessage();
  exit($err);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>効果測定</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div>
  <!-- 入力フォームを作る -->
  <!-- <form method="POST" action="＿＿＿（６）＿＿＿"> -->
  <form method="POST" action="select_goods.php">
    <h3>ブランド名で検索</h3>
    <p>
      <select name="brand">
        <?php
        // ブランドはブランドテーブルに登録してあるものから選ぶ
        // foreach (＿＿＿（７）＿＿＿){
        foreach ($result as $row){
          echo '<option value="', $row["id"], '">', $row["name"], "</option>";
        }
        ?>
      </select>
    </p>
    <p><input type="submit" value="検索する"></p>
  </form>
</div>
</body>
</html>
