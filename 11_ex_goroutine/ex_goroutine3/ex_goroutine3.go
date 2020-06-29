package main

import (
	"fmt"
	"time"
)

/**
関数 processA の定義
関数シグニチャ
関数名：processA
引数：
num 繰り返し回数（型 int）
message 表示メッセージ（型 strng）
処理：
processB をゴルーチンとして生成し
引数で指定された繰り返し回数分、指定されたメッセージを表示し
１ミリ秒待つ
戻り値：なし
*/

// ＿＿＿＿＿（１）＿＿＿＿＿ {
func processA(procName string, num int, message string) {

	fmt.Println("GoroutineA start!")

	/**
	新規にゴルーチンを生成
	プロセス名：GoroutineB
	繰り返し回数：10
	表示メッセージ：Hello!!
	*/
	// ＿＿＿＿＿（２）＿＿＿＿＿
	go processB("GoroutineB", 10, "Hello!!")

	// 引数に指定された回数分繰り返す
	// ＿＿＿＿＿（３）＿＿＿＿＿ {
	for i := 0; i < num; i++ {
		// 繰返し数と、引数に指定されたメッセージを表示
		fmt.Printf("[processA] %d : %s\n", i+1, message)
		// １ミリ秒待つ
		time.Sleep(time.Millisecond)
	}
	fmt.Println("processA end")
}

/**
関数 processB の定義
関数シグニチャ
関数名：processB
引数：
num 繰り返し回数（型 int）
message 表示メッセージ（型 strng）
処理：
引数で指定された繰り返し回数分、指定されたメッセージを表示し
１ミリ秒待つ
戻り値：なし
*/

// ＿＿＿＿＿（４）＿＿＿＿＿ {
func processB(procName string, num int, message string) {
	fmt.Println("GoroutineB start!")

	// 引数に指定された回数分繰り返す
	// ＿＿＿＿＿（５）＿＿＿＿＿ {
	for i := 0; i < num; i++ {
		// 繰返し数と、引数に指定されたメッセージを表示
		fmt.Printf("[processB] %d : %s\n", i+1, message)
		// １ミリ秒待つ
		time.Sleep(time.Millisecond)
	}
	fmt.Printf("processB end")
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
	// ＿＿＿＿＿（６）＿＿＿＿＿
	go processA("GoroutineA", 5, "こんにちは！！")
	// １秒待つ
	time.Sleep(time.Second)
	fmt.Println("Main End")
}
