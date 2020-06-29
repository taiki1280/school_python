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

// Message 構造体
type Message struct {
	message string
	count   int
}

/**
CalcData型構造体の定義
構造体名：CalcData
フィールド
message 表示メッセージ（型 strng）
count 回数（型 int）
total 回数の合計（型 int）
*/

// CalcData 構造体
type CalcData struct {
	message string
	count   int
	total   int
}

/**
インタフェース CalcProc 型の定義
インタフェース名：CalcProc
メソッド
メソッド名：process
引数の型：string
戻り値：なし
*/

// CalcProc 構造体
type CalcProc interface {
	process(string)
}

/**
Message構造体をレシーバとするメソッド process の実装
メソッドシグニチャ
メソッド名：process
引数：procName プロセス名（型 string）
処理：
指定された繰り返し回数分、指定されたメッセージを表示し
１ミリ秒待つ
戻り値：なし
*/

func (x Message) process(procName string) {
	for i := 0; i < x.count; i++ {
		fmt.Printf("[%s]%d : %s\n", procName, i+1, x.message)
		time.Sleep(time.Millisecond)
	}
}

/**
CalcData構造体をレシーバとするメソッド process の実装
メソッドシグニチャ
メソッド名：process
引数：procName プロセス名（型 string）
処理：
指定された繰り返し数文、足し算をし
１ミリ秒待つ
最後に合計を表示する
戻り値：なし
*/

func (x CalcData) process(procName string) {
	for i := 0; i < x.count; i++ {
		fmt.Printf("[%s]%d : %s : %dを加算\n", procName, i+1, x.message, i)
		time.Sleep(time.Millisecond)
		x.total += i
	}
	fmt.Printf("合計 = %d\n", x.total)
}

func main() {
	// Message型構造体の宣言と初期化
	procMessage := Message{"こんにちは！！", 10}
	// CalcData型構造体の宣言と初期化
	procAdd := CalcData{"足し算します！！", 5, 0}
	// CalcProc型インタフェースの宣言
	var calclate CalcProc

	fmt.Println("Main Start")
	fmt.Println("Fork Goroutine")

	// ＿＿＿＿＿（１）＿＿＿＿＿
	calclate = procMessage
	/**
	新規にゴルーチンを生成
	繰り返し回数：10
	表示メッセージ：こんにちは！！
	*/
	// ＿＿＿＿＿（２）＿＿＿＿＿
	go calclate.process("GoroutineA")

	// ＿＿＿＿＿（３）＿＿＿＿＿
	calclate = procAdd
	/**
	新規にゴルーチンを生成
	繰り返し回数：10
	表示メッセージ：足し算します！！
	*/
	// ＿＿＿＿＿（４）＿＿＿＿＿
	go calclate.process("GoroutineB")

	// １秒待つ
	time.Sleep(time.Second)
	fmt.Println("Main End")
}
