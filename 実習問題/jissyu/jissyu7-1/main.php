<?php
// クラスファイルを読み込む
require_once("teacher.php");
require_once("student.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>実習7-1</title>
</head>

<body>
    <pre>
<?php
// インスタンス化
$teacher = new Teacher("大原太郎", 28, "PHP");
$student = new Student("大原次郎", 19, 2);
// メソッドを実行する
$teacher->hello();
echo PHP_EOL;
$student->hello();
?>
</pre>
</body>

</html>