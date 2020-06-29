package main

import (
	"fmt"
	"time"
)

/**
Message型構造体の定義
構造体名：Message
フィールド
message 表示メッセージ（型 string）
count 回数（型 int）
*/

type Message struct {
	message string
	count   int
}

/**
Message構造体をレシーバとするメソッド process の実装
メソッドシグニチャ
関数名：process
引数：procName プロセス名（型 string）
処理：
指定された繰り返し回数分、指定されたメッセージを表示し
１ミリ秒待つ
戻り値：なし
*/

func (x Message) process(procName string) {
	for i := 0; i < x.count; i++ {
		fmt.Printf("%s%d : %s\n", procName, i+1, x.message)
		time.Sleep(time.Millisecond)
	}
}

func main() {
	procData := Message{"こんにちは！！", 10}
	fmt.Println("Main Start")
	fmt.Println("Fork Goroutine")
	/**
	新規にゴルーチンを生成
	繰り返し回数：10
	表示メッセージ：こんにちは！！
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿
	go procData.process("GoroutineA")
	// １秒待つ
	time.Sleep(time.Second)
	fmt.Println("Main End")
}
