package main

import (
	"fmt"
	"time"
)

/**
関数 process の定義
関数シグニチャ
関数名：process
引数：
procName  プロセス名（型 string）
num 繰り返し回数（型 int）
message 表示メッセージ（型 strng）
処理：
引数で指定された繰り返し回数分、指定されたメッセージを表示し
１ミリ秒待つ
戻り値：なし
*/
// ＿＿＿＿＿（１）＿＿＿＿＿ {
func process(procName string, num int, message string) {
	fmt.Printf("%s start!\n", procName)
	// 引数に指定された回数分繰り返す
	// ＿＿＿＿＿（２）＿＿＿＿＿ {
	for i := 0; i < num; i++ {
		// 繰返し数と、引数に指定されたメッセージを表示
		fmt.Printf("[%s] %d : %s\n", procName, i+1, message)
		// １ミリ秒待つ
		time.Sleep(time.Millisecond)
	}
	fmt.Printf("%s end\n", procName)
}
func main() {
	fmt.Println("Main Start")
	fmt.Println("Fork Goroutine")
	/**
	新規にゴルーチンを生成
	プロセス名：GoroutineA
	繰り返し回数：5
	表示メッセージ：こんにちは！！
	*/
	// ＿＿＿＿＿（３）＿＿＿＿＿
	go process("GoroutinA", 5, "こんにちは！！")
	// １秒待つ
	time.Sleep(time.Second)
	fmt.Println("Main End")
}
