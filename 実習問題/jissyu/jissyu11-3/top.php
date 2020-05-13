<?php
    require_once("util.php");
    // エラーメッセージを入れる配列
    $errors = [];
    //ポスト送信されたユーザIDを取り出す
    if (isset($_POST["userid"])){
      $userid = $_POST["userid"];
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたユーザIDの値がありません。";
    }
    
    //ポスト送信されたパスワードを取り出す
    if (isset($_POST["password"])){
      $password = $_POST["password"];
    } else {
      // ポストの値がないのでエラーの値を設定する
      $errors[] = "ポスト送信されたパスワードの値がありません。";
    }
    //クッキーに文字列に連結して保存する（テスト用に5分で設定）
    //使用するのはログイン画面に戻った時
    $userString = $userid."&".$password;
    setcookie("userString",$userString,time()+60*5);
?>
<?php
//11-2追記
// ファイルに書き込むストリングを作る
$data = date("Y/n/j G:i:s" ,time());
$writedata = "ログイン時間：" . $data . "\n";
try {
  // ワークファイルのファイルオブジェクト（新規書き込み）
  $workingfileObj = new SplFileObject("working.tmp", "wb");
  // 新しいメモをワークファイルに書き込む

  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->fwrite($writedata);
  $workingfileObj->flock(LOCK_UN);
} catch (Exception $e) {
  echo '<span class="error">エラーがありました。</span><br>';
  echo $e->getMessage();
  exit();
}
//元ファイル
$filename = "login_log.txt";
// 元ファイルがあるかどうか確認する
if (file_exists($filename)){
  // 元ファイルのファイルオブジェクト（読み込み専用モード）
  $fileObj = new SplFileObject($filename, "rb");
  // 元データを読み込む
  $fileObj->flock(LOCK_SH);
  $olddata = $fileObj->fread($fileObj->getSize());
  $fileObj->flock(LOCK_UN);
  
  // 古いデータを作業ファイルに追記する
  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->fwrite($olddata);
  $workingfileObj->flock(LOCK_UN);
  
  // 元ファイルを閉じる
  $fileObj = NULL;
  // 元ファイルを削除する
  unlink($filename);
}

// 作業ファイルをクローズする
$workingfileObj = NULL;
// 作業ファイルをリネームする
rename("working.tmp", $filename);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>トップ画面</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>

<?php
if (count($errors)>0){
  //エラーがあったとき
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
  ?>
  <span>
  <input type="button" value="戻る" onclick="location.href='login.php'">
</span>
<?php
}else{
  echo "こんにちは、{$userid}さん。<br>",PHP_EOL;
  echo "パスワードは{$password}です。<br>",PHP_EOL;
?>
<input type="button" value="戻る" onclick="location.href='login.php'">
<?php
}
?>

</div>
</body>
</html>
