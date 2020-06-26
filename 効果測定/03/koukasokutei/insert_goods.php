<?php
require_once("util.php");
$gobackURL = "kouka_sokutei3_3.php";

// 文字エンコードの検証
if (!cken($_POST)) {
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
</head>

<body>
  <div>
    <?php
    // 簡単なエラー処理
    $errors = [];
    if (!isset($_POST["id"]) || ($_POST["id"] === "")) {
      $errors[] = "商品IDが空です。";
    }
    if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
      $errors[] = "商品名が空です。";
    }
    if (!isset($_POST["brand"]) || ($_POST["brand"] === "")) {
      $errors[] = "ブランドが空です。";
    }
    if (!isset($_POST["quantity"]) || (!ctype_digit($_POST["quantity"]))) {
      $errors[] = "個数が整数値ではありません。";
    }
    //エラーがあったとき
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>", $value, "</li>";
      }
      echo "</ol>";
      echo "<hr>";
      echo "<a href=", $gobackURL, ">戻る</a>";
      exit();
    }

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
    } catch (Exception $e) {
      $err =  '<span class="error">エラーがありました。</span><br>';
      $err .= $e->getMessage();
      exit($err);
    }

    try {
      // トランザクションを開始する
      // ＿＿＿（９）＿＿＿;
      $pdo->beginTransaction();
      // SQL文を作る
      // $sql1 = "＿＿＿（１０）＿＿＿";
      $sql1 = "INSERT INTO goods (id, name, size, brand) VALUES (:id, :name, :size, :brand);";
      $sql2 = "INSERT INTO stock (goods_id, quantity) VALUES (:goods_id, :quantity);";
      // プリペアドステートメントを作る
      $insertGoods = $pdo->prepare($sql1);
      // ＿＿＿（１２）＿＿＿;
      $insertStock = $pdo->prepare($sql2);
      // プレースホルダに値をバインドする
      $insertGoods->bindValue(':id', $_POST["id"], PDO::PARAM_STR);
      $insertGoods->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
      $insertGoods->bindValue(':size', $_POST["size"], PDO::PARAM_STR);
      // ＿＿＿（１３）＿＿＿;
      $insertGoods->bindValue(':brand', $_POST["brand"], PDO::PARAM_STR);
      $insertStock->bindValue(':goods_id', $_POST["id"], PDO::PARAM_STR);
      // ＿＿＿（１４）＿＿＿;
      $insertStock->bindValue(':quantity', $_POST["size"], PDO::PARAM_STR);
      // SQL文を実行する
      $insertGoods->execute();
      // ＿＿＿（１５）＿＿＿;
      $insertStock->execute();
      // トランザクション処理を完了する
      // ＿＿＿（１６）＿＿＿;
      $pdo->commit();
      // 結果報告
      echo "商品データ／在庫データを追加しました。";
    } catch (Exception $e) {
      // エラーがあったならば元の状態に戻す
      // ＿＿＿（１７）＿＿＿;
      $pdo->rollBack();
      echo '<span class="error">登録エラーがありました。</span><br>';
      echo $e->getMessage();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
  </div>
</body>

</html>