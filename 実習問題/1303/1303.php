<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="tablestyle.css">

  <title>Document</title>
</head>

<body>
  <div>
    <?php
    require_once "util.php";
    $user = 'root';
    $password = '';
    $dbName = 'jissyu';
    $host = 'localhost';
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
    try {
      $pdo = new PDO($dsn, $user, $password);
      // プリペアドステートメントのエミュレーションを無効にする
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      // 例外がスローされる設定にする
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました。", "<br>";
      // SQL文を作る（全レコード）
      $sql = "SELECT * FROM users WHERE name LIKE '%大原%'";
      // プリペアドステートメントを作る
      $stm = $pdo->prepare($sql);
      // SQL文を実行する
      $stm->execute();
      // 結果の取得（連想配列で返す）
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました。</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <table border="1">
      <thead>
        <tr>
          <th>ユーザID</th>
          <th>名前</th>
          <th>メールアドレス</th>
          <th>パスワード</th>
          <th>登録日時</th>
          <th>変更日時</th>
          <th>削除済み</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $value) : ?>
          <tr>
            <td><?= es($value['id']) ?></td>
            <td><?= es($value['name']) ?></td>
            <td><?= es($value['email']) ?></td>
            <td><?= es($value['password']) ?></td>
            <td><?= es($value['created_at']) ?></td>
            <td><?= es($value['updated_at']) ?></td>
            <td><?= es($value['delete_flg']) ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>

</html>