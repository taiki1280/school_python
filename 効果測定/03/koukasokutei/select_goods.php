<?php
require_once("util.php");
$gobackURL = "kouka_sokutei3_2.php";

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
<title>効果測定</title>
<link href="style.css" rel="stylesheet">
<link href="tablestyle2.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  // 簡単なエラー処理
  $errors = [];
  if (!isset($_POST["brand"])||($_POST["brand"]==="")) {
    $errors[] = "ブランドが空です。";
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

  $brand = $_POST['brand'];

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
    // $pdo = ＿＿＿（８）＿＿＿;
    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL文を作る
    // $sql = "＿＿＿（９）＿＿＿";
    $sql = "SELECT id,name,size,brand FROM goods WHERE brand LIKE :brand";
    // プリペアドステートメントを作る
    // $stm = ＿＿＿（１０）＿＿＿;
    $stm = $pdo->prepare($sql);
    // プレースフォルダに値をバインドする
    // $stm->bindValue(＿＿＿（１１）＿＿＿);
    $stm->bindValue(":brand",$brand);
    // SQL文を実行する
    // ＿＿＿（１２）＿＿;
    $stm->execute();
    // 結果の取得（連想配列で受け取る）
    // $result = ＿＿＿（１３）＿＿＿;
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // テーブルのタイトル行
    echo "<table border='1'>";
    echo "<caption>検索結果（検索語：", $_POST["brand"], "）</caption>";
    echo "<thead><tr>";
    echo "<th>", "ID", "</th>";
    echo "<th>", "商品", "</th>";
    echo "<th>", "サイズ", "</th>";
    echo "<th>", "ブランド", "</th>";
    echo "</tr></thead>";
    // 値を取り出して行に表示する
    echo "<tbody>";
    // foreach (＿＿＿（１４）＿＿＿){
    foreach ($result as $value_list){
      // １行ずつテーブルに入れる
      echo "<tr>";
      // echo "<td>", ＿＿＿（１５）＿＿＿, "</td>";
      echo "<td>", $value_list["id"], "</td>";
      // echo "<td>", ＿＿＿（１６）＿＿＿, "</td>";
      echo "<td>", $value_list["name"], "</td>";
      // echo "<td>", ＿＿＿（１７）＿＿＿, "</td>";
      echo "<td>", $value_list["size"], "</td>";
      // echo "<td>", ＿＿＿（１８）＿＿＿, "</td>";
      echo "<td>", $value_list["brand"], "</td>";
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
  <hr>
  <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
</div>
</body>
</html>
