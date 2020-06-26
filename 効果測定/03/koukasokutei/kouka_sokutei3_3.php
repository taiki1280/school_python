/*
今回のプログラムは、データベースinventoryの
テーブルgoodsに対して、フォームからレコードを追加するものです。
問題の実行結果となるように
未完成プログラムの空欄部分を埋めてプログラムを完成させてください。
なお、プログラム名は
入力フォーム：kouka_sokutei3_3.php
レコード追加プログラム；insert_goods.php
とします。
*/

<?php
require_once("util.php");
$gobackURL = "kouka_sokutei3_3.php";

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
  <title>レコード追加</title>
  <link href="style.css" rel="stylesheet">
  <!-- <link href="tablestyle2.css" rel="stylesheet">-->
</head>

<body>
  <div>
    <!-- 入力フォームを作る -->
    <!-- <form method="POST" action="＿＿＿（６）＿＿＿"> -->
    <form method="POST" action="insert_goods.php">
      <table border="1">
        <caption>商品情報の入力</caption>
        <tr>
          <th>商品ID</th>
          <td><input type="text" name="id" placeholder="商品ID"></td>
        </tr>
        <tr>
          <th>商品名</th>
          <td><input type="text" name="name" placeholder="商品名"></td>
        </tr>
        <tr>
          <th>サイズ</th>
          <td><input type="text" name="size" placeholder="サイズ"></td>
        </tr>
        <tr>
          <th>ブランド</th>
          <td>
            <select name="brand">
              <?php
              // ブランドはブランドテーブルに登録してあるものから選ぶ
              // foreach (＿＿＿（７）＿＿＿){
              foreach ($result as $row) {
                echo '<option value="', $row["id"], '">', $row["name"], "</option>";
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <th>個数</th>
          <td><input type="number" name="quantity" placeholder="半角数字"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="追加する"></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>