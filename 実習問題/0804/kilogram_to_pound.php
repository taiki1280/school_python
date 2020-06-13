<?php
// 初期値１(0にしてしまうとif分岐できない)
// １にした理由は初期状態の判別（初回ロード後の未入力時エラーを非表示にする為）
$value = 1;
// 入力値があれば代入しpound算出
if (isset($_POST["value"])) {
    $value = $_POST["value"];
    $pound = $value * 2.2046;
}
?>
<form action="kilogram_to_pound.php" method="POST">
    <?= "from kilogram to pound" ?>
    <input type="number" name="value">
    <input type="submit" value="calculate">
    <?php
    // 0以下の値が入力されている時[入力が無い(false:0)含む]
    if ($value <= 0)
        echo "←Fill in the blank with the correct number";
    ?>
</form>
<?php
// 入力された値が存在するときのみ実行
// $valueの初期値は条件に指定しない。
if ($_POST["value"] > 0) {
    echo "「{$value}kg」 and 「{$pound}pound」 are the same weight.";
}
