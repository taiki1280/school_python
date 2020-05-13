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
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>レコード追加</title>
<link href="style.css" rel="stylesheet">
<!-- テーブル用のスタイルシート -->
<link href="tablestyle2.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース{$dbName}に接続しました。", "<br>";
    // SQL文を作る（プレースホルダを使った式）
    $sql = "SELECT purchase_history_details.id as id,users.name as user_name,products.name as products_name,
    products.price as price,purchase_history_details.quantity as quantity,purchase_history.order_date as order_date 
    FROM products,purchase_history_details,purchase_history,users 
    WHERE users.id = purchase_history.user_id AND purchase_history.id = purchase_history_details.purchase_id AND 
    products.id = purchase_history_details.products_id";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);

    // SQL文を実行する
    $stm->execute();

    // 結果の取得（連想配列で返す）
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // テーブルのタイトル行
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "注文履歴詳細ID", "</th>";
    echo "<th>", "名前", "</th>";
    echo "<th>", "商品名", "</th>";
    echo "<th>", "価格", "</th>";
    echo "<th>", "個数", "</th>";
    echo "<th>", "注文日付", "</th>";
    echo "</tr></thead>";
    // 値を取り出して行に表示する
    echo "<tbody>";
    foreach ($result as $row){
      // １行ずつテーブルに入れる
      echo "<tr>";
      echo "<td>", es($row['id']), "</td>";
      echo "<td>", es($row['user_name']), "</td>";
      echo "<td>", es($row['products_name']), "</td>";
      echo "<td>", es($row['price']), "</td>";
      echo "<td>", es($row['quantity']), "</td>";
      echo "<td>", es($row['order_date']), "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
</div>
</body>
</html>
