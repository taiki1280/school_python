<?php
require_once("util.php");
$gobackURL = "insertform.html";

// 文字エンコードの検証
if (!cken($_POST)){
  header("Location:{$gobackURL}");
  exit();
}

// 簡単なエラー処理
$errors = [];
if (!isset($_POST["name"])||($_POST["name"]==="")){
  $errors[] = "名前が空です。";
}
if (!isset($_POST["email"])||($_POST["email"]==="")){
  $errors[] = "メールアドレスが空です。";
}
if (!isset($_POST["password"])||($_POST["password"]==="")){
  $errors[] = "パスワードが空です。";
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
//---------------------------------------------------------------//
//データベースのパスワードと、POST送信のパスワードが混合しないよう注意
//---------------------------------------------------------------//
$pass = 'pw4jissyu';
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
<link href="tablestyle.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  //POSTのデータを取り出す
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $pass);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース{$dbName}に接続しました。", "<br>";
    // SQL文を作る（プレースホルダを使った式）
    $sql = "INSERT users (name,email,password) VALUES(:name,:email,:password)";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);
    // プレースホルダに値をバインドする
    $stm->bindValue(':name',$name, PDO::PARAM_STR);
    $stm->bindValue(':email',$email, PDO::PARAM_STR);
    $stm->bindValue(':password',$password, PDO::PARAM_STR);

    // SQL文を実行する
    $stm->execute();
    

    // 更新後の確認
    $sql = "SELECT * FROM users";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    // 結果の取得（連想配列で返す）
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // テーブルのタイトル行
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "ユーザID", "</th>";
    echo "<th>", "名前", "</th>";
    echo "<th>", "メールアドレス", "</th>";
    echo "<th>", "パスワード", "</th>";
    echo "<th>", "登録日時", "</th>";
    echo "<th>", "変更日時", "</th>";
    echo "<th>", "削除済み", "</th>";
    echo "</tr></thead>";
    // 値を取り出して行に表示する
    echo "<tbody>";
    foreach ($result as $row){
      // １行ずつテーブルに入れる
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
