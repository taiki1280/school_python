<!-- /*
今回のプログラムは、データベースinventoryの
テーブル goodsの全レコードを表示するものです。
問題の実行結果となるように、プログラムを作成しなさい。
ファイル名は、kouka_sokutei3_1.php とします。
*/ -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="tablestyle2.css">

  <title>効果測定</title>
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
      $sql = "SELECT * FROM goods";
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
          <th>ID</th>
          <th>商品</th>
          <th>サイズ</th>
          <th>ブランド</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $value) : ?>
          <tr>
            <td><?= es($value['id']) ?></td>
            <td><?= es($value['name']) ?></td>
            <td><?= es($value['size']) ?></td>
            <td><?= es($value['brand']) ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>

</html>