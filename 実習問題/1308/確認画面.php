<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="tablestyle.css">
  <title>確認画面</title>
</head>

<body>
  <?php
  // if (isset($_POST["name"]))
  // 正しい値以外は入らないようになっているので判定は不要
  $name = $_POST["name"];
  $product_name = $_POST["product_name"];
  $num = $_POST["num"];
  // echo $name, nl2br("\n");
  // echo $product_name, nl2br("\n");
  // echo $num, nl2br("\n");
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
    var_dump($name_list);
    var_dump($product_name_list);
    // 入力データを追加する
    // $sql = "INSERT INTO purchase_history (user_id, total_price) VALUES($name, 3000);";
    // $stm = $pdo->prepare($sql);
    // $stm->execute();



    // テーブルを表示する
    $sql = "SELECT purchase_history.id,users.name,products.name AS product_name, price,purchase_history_details.quantity, order_date FROM users,products,purchase_history,purchase_history_details WHERE users.id = purchase_history.user_id AND purchase_history.id = purchase_history_details.purchase_id AND products.id = purchase_history_details.products_id";
    $stm = $pdo->prepare($sql);
    $stm->execute();
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
        <th>注文履歴詳細ID</th>
        <th>名前</th>
        <th>商品名</th>
        <th>価格</th>
        <th>個数</th>
        <th>注文日付</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $value) : ?>
        <tr>
          <td><?= es($value['id']) ?></td>
          <td><?= es($value['name']) ?></td>
          <td><?= es($value['product_name']) ?></td>
          <td><?= es($value['price']) ?></td>
          <td><?= es($value['quantity']) ?></td>
          <td><?= es($value['order_date']) ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <!-- 戻るボタン -->
  <form action="入力画面.php" method="POST">
    <button type="submit">戻る</button>
  </form>

</body>

</html>