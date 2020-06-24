<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="tablestyle.css">
  <title>入力画面</title>
</head>

<body>
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
    // echo "データベース{$dbName}に接続しました。", "<br>";
    // usersテーブルの取得
    $sql = "SELECT * FROM users";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $users_table = $stm->fetchAll(PDO::FETCH_ASSOC);
    // users_table連想配列より名前のリストを作成
    foreach ($users_table as $value) {
      $name_list[] = $value["name"];
    }
    // productsテーブルの取得
    $sql = "SELECT * FROM products";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $products_table = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products_table as $value) {
      $product_name_list[] = $value["name"];
    }
    echo "<br>";
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
  <!DOCTYPE html>
  <html lang="ja">
  <form action="確認画面.php" method="POST">
    <ul>
      <li>
        ユーザー名：
        <select name="name">
          <?php foreach ($name_list as $value) : ?>
            <option value=<?= $value ?>><?= $value ?></option>
          <?php endforeach ?>
        </select>
      </li>
      <li>
        商品名：
        <select name="product_name">
          <?php foreach ($product_name_list as $value) : ?>
            <option value=<?= $value ?>><?= $value ?></option>
          <?php endforeach ?>
        </select>
      </li>
      <li>
        個数：<input name="num" type="number" min="1" value="1">
      </li>
      <li>
        <button type="submit">追加する</button>
      </li>
    </ul>
  </form>
</body>

</html>