<?php
require_once "util.php";
$gobackURL = "入力画面.html";

if (!cken($_POST)) {
  header("Location:{$gobackURL}");
  exit();
}

$errors = [];
if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
  $errors[] = "名前が空です。";
}
if (!isset($_POST["email"]) || ($_POST["email"] === "")) {
  $errors[] = "メールアドレスが空です。";
}
if (!isset($_POST["password"]) || ($_POST["password"] === "")) {
  $errors[] = "パスワードが空です。";
}

if (count($errors) > 0) {
  echo '<ul class="error">';
  foreach ($errors as $key => $value) {
    echo "<li> エラー", $key + 1, "番目：", $value, "</li>";
  }
  echo "</ul>";
  echo "<hr>";
  echo "<a href=", $gobackURL, ">戻る</a>";
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
  <link href="tablestyle.css" rel="stylesheet">
</head>

<body>
  <div>
    <?php
    // 取得値
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQLの設定
    $user = 'root';
    $dbName = 'jissyu';
    $pass = '';
    $host = 'localhost';
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

    try {
      $pdo = new PDO($dsn, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました。", "<br>";
      $sql = "INSERT users (name,email,password) VALUES(:name,:email,:password)";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', $name, PDO::PARAM_STR);
      $stm->bindValue(':email', $email, PDO::PARAM_STR);
      $stm->bindValue(':password', $password, PDO::PARAM_STR);

      $stm->execute();

      $sql = "SELECT * FROM users";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
      echo "<thead><tr>";
      echo "<th>ユーザID</th>";
      echo "<th>名前</th>";
      echo "<th>メールアドレス</th>";
      echo "<th>パスワード</th>";
      echo "<th>登録日時</th>";
      echo "<th>変更日時</th>";
      echo "<th>削除済み</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>", es($row['id']), "</td>";
        echo "<td>", es($row['name']), "</td>";
        echo "<td>", es($row['email']), "</td>";
        echo "<td>", es($row['password']), "</td>";
        echo "<td>", es($row['created_at']), "</td>";
        echo "<td>", es($row['updated_at']), "</td>";
        echo "<td>", es($row['delete_flg']), "</td>";
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