<?php
require_once("util.php");

// データベースユーザ
$user = 'jissyu';
$password = 'pw4jissyu';
// 利用するデータベース
$dbName = 'jissyu';
// MySQLサーバ
$host = 'localhost:3306';
// MySQLのDSN文字列
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
//MySQLデータベースに接続する
try {
  $pdo = new PDO($dsn, $user, $password);
  // プリペアドステートメントのエミュレーションを無効にする
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // 例外がスローされる設定にする
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // ユーザテーブルからユーザIDとユーザ名を取り出す
  $sql = "SELECT id as user_id, name as user_name FROM users";
  // プリペアドステートメントを作る
  $stm = $pdo->prepare($sql);
  // SQLクエリを実行する
  $stm->execute();
  // 結果の取得（連想配列で受け取る）
  $user = $stm->fetchAll(PDO::FETCH_ASSOC);

  // 商品テーブルから商品IDと商品名を取り出す
  $sql = "SELECT id as products_id, name as products_name FROM products";
  // プリペアドステートメントを作る
  $stm = $pdo->prepare($sql);
  // SQLクエリを実行する
  $stm->execute();
  // 結果の取得（連想配列で受け取る）
  $products = $stm->fetchAll(PDO::FETCH_ASSOC);
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
<title>レコード追加</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div>
  <!-- 入力フォームを作る -->
  <form method="POST" action="products.php">
    <ul>
      <li>ユーザ名：
      <select name="user">
          <?php
          // ユーザ名はユーザテーブルに登録してあるものから選ぶ
          foreach ($user as $row){
            echo '<option value="', $row["user_id"], '">', $row["user_name"], "</option>";
          }
          ?>
        </select>
      </li>
      <li>商品名：
      <select name="products">
          <?php
          // 商品名は商品テーブルに登録してあるものから選ぶ
          foreach ($products as $row){
            echo '<option value="', $row["products_id"], '">', $row["products_name"], "</option>";
          }
          ?>
        </select>
      </li>
      <li>
        <label>個数：
        <input type="number" name="quantity" placeholder="半角数字">
      </li>
      <li><input type="submit" value="追加する"></li>
    </ul>
  </form>
</div>
</body>
</html>
