<?php
require_once "GameBook.php";

// GameBookインターフェースを使用
class Mygame implements GameBook
{
    public $hit_point;
    function __construct($point = 50)
    {
        // $this.point = $point;
        // インスタンス化及びゲーム開始
        $this->newGame($point);
    }
    public function play()
    {
        echo "play関数";
    }

    public function isAlive(): bool
    {
        return true;
    }
}
