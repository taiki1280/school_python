<?php
require_once("util.php");
$gobackURL = "products_form.php";

// 文字エンコードの検証
if (!cken($_POST)){
  header("Location:{$gobackURL}");
  exit();
}
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
// 簡単なエラー処理
$errors = [];
if (!isset($_POST["user"])||($_POST["user"]==="")){
  $errors[] = "ユーザIDが空です。";
}
if (!isset($_POST["products"])||($_POST["products"]==="")){
  $errors[] = "商品IDが空です。";
}
if (!isset($_POST["quantity"])||(!ctype_digit($_POST["quantity"]))) {
  $errors[] = "個数が整数値ではありません。";
}
//エラーがあったとき
if (count($errors)>0){
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
  echo "<hr>";
  echo "<a href=", $gobackURL, ">戻る</a>";
  exit();
}
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
} catch (Exception $e) {
  $err =  '<span class="error">エラーがありました。</span><br>';
  $err .= $e->getMessage();
  exit($err);
}

try {
  // トランザクションを開始する
  $pdo->beginTransaction();
  
  // 商品IDから価格を取り出す
  $sql1 = "SELECT price FROM products WHERE id = :products_id";
  $selectPrice = $pdo->prepare($sql1);
  $selectPrice->bindValue(':products_id', $_POST["products"], PDO::PARAM_INT);
  $selectPrice->execute();
  $result = $selectPrice->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row){
    $price = es($row['price']);
  }
  //商品履歴にデータを挿入
  $sql2 = "INSERT INTO purchase_history(user_id,total_price) 
  VALUES(:user_id,:total_price)";
  $insertHistory = $pdo->prepare($sql2);
  $insertHistory->bindValue(':user_id', $_POST["user"], PDO::PARAM_INT);
  $insertHistory->bindValue(':total_price', $_POST["quantity"] * $price, PDO::PARAM_INT);
  $insertHistory->execute();

  //商品履歴IDの最新を取り出す
  $purchase_id = $pdo->lastInsertId();
  
  //商品履歴詳細にデータを挿入
  $sql3 ="INSERT INTO purchase_history_details(purchase_id,products_id,quantity) 
  VALUES(:purchase_id,:products_id,:quantity)";
  $insertDetails = $pdo->prepare($sql3);
  $insertDetails->bindValue(':purchase_id', $purchase_id, PDO::PARAM_INT);
  $insertDetails->bindValue(':products_id', $_POST["products"], PDO::PARAM_INT);
  $insertDetails->bindValue(':quantity', $_POST["quantity"], PDO::PARAM_INT);
  $insertDetails->execute();

  // 結果報告
  echo "商品履歴データ／商品履歴詳細データを追加しました。";

  //一覧で表示する
  $sql4 = "SELECT purchase_history_details.id as id,users.name as user_name,products.name as products_name,
    products.price as price,purchase_history_details.quantity as quantity,purchase_history.order_date as order_date 
    FROM products,purchase_history_details,purchase_history,users 
    WHERE users.id = purchase_history.user_id AND purchase_history.id = purchase_history_details.purchase_id AND 
    products.id = purchase_history_details.products_id ORDER BY id";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql4);

    // SQL文を実行する
    $stm->execute();

    // 結果の取得（連想配列で返す）
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    //テーブルのタイトル行
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
  // トランザクション処理を完了する
  $pdo->commit();
} catch (Exception $e) {
  echo '<span class="error">エラーがありました。</span><br>';
  echo $e->getMessage();
  exit();
}

?>
</div>
</body>
</html>
