<?php
require_once "TaroTool.php";
require_once "HanaTool.php";
class Myclass
{
    // 衝突の解消
    use HanaTool, TaroTool {
        // はなツールのHelloの名前を変更
        HanaTool::hello as HanaHello;
        // たろうツールのHelloの名前を変更
        TaroTool::hello as TaroHello;
        // ただのHelloが呼ばれるときの設定

        // たろうを使う（はなの代わりに）
        // TaroTool::hello insteadof HanaTool;
        // はなを使う（たろうの代わりに）
        HanaTool::hello insteadof TaroTool;
    }
}
$a = new Myclass;
$a->hello();
$a->Tarohello();
$a->Hanahello();
// $a->taroHello();
