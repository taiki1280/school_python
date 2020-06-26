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
    $dbName = 'inventory';
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
      $sql = "SELECT country FROM brand WHERE name LIKE 'ウディナ'";
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
          <th>"SELECT country FROM brand WHERE name LIKE 'ウディナ'"</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $value) : ?>
          <tr>
            <td><?= es($value['country']) ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>

</html>