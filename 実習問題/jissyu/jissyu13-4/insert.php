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
<title>レコードを追加する(INSERT)</title>
<link href="style.css" rel="stylesheet">
<!-- テーブル用のスタイルシート -->
<link href="tablestyle.css" rel="stylesheet">
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
    // SQL文を作る（新規レコードを追加する）
    $sql = "INSERT users (name,email,password)
     VALUES('菅田光子', 'mitsuko_suda@email.com','mitsuko2020'),
     ('高田久美子','kumiko_takada@email.com','takada0409'),
     ('青柳次郎','jiro_aoyagi@email.com','aoyagijiro')";
    // プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);
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
</div>
</body>
</html>
