package main

import "fmt"

/**
チャンネル送信関数の定義
関数シグニチャ
関数名：sendEven
引数：
limit：偶数の上限数（型 int）
s：送信チャンネル（型 chan<- int）
処理：
指定された上限数までの偶数を生成し、送信チャンネルに送信する
送信が終わればクローズする
戻り値：なし
*/
func sendEven(limit int, s chan<- int) {
	for i := 0; i <= limit; i++ {
		if i%2 == 0 {
		}
	}
	close(s)
}

/**
チャンネル送信関数の定義
関数シグニチャ
関数名：sendOdd
引数：
limit：奇数の上限数（型 int）
s：送信チャンネル（型 chan<- int）
処理：
指定された上限数までの奇数を生成し、送信チャンネルに送信する
送信が終わればクローズする
戻り値：なし
*/

func sendOdd(limit int, s chan<- int) {
	for i := 0; i <= limit; i++ {
		if i%2 != 0 {
			s <- i
		}
	}
	close(s)
}

func main() {

	// チャネルの作成
	// evenChan := ＿＿＿＿＿（１）＿＿＿＿＿  // 偶数用チャンネル
	evenChan := make(chan int)
	// oddChan := ＿＿＿＿＿（１）＿＿＿＿＿   // 奇数用チャンネル
	oddChan := make(chan int)

	/**
	ゴルーチンを生成し、偶数用チャンネルに１０までの偶数を送信
	*/
	// ＿＿＿＿＿（２）＿＿＿＿＿
	go sendEven(10, evenChan)
	/**
	ゴルーチンを生成し、奇数用チャンネルに７までの偶数を送信
	*/
	go sendOdd(7, oddChan)

	// 受信プロセス（無限ループ）
	for {
		// 偶数用チャンネルより偶数を受信する
		// ＿＿＿＿＿（４）＿＿＿＿＿
		evenVal, evenOk := <-evenChan
		// 奇数用チャンネルより奇数を受信する
		// ＿＿＿＿＿（５）＿＿＿＿＿
		oddVal, oddOk := <-oddChan

		/**
		偶数用、奇数用のゴルーチン両方の処理が終わるのを判断し
		終了したら受信を終了する
		*/
		// if ＿＿＿＿＿（６）＿＿＿＿＿ {
		if !evenOk && !oddOk {
			break
		}
		// 受信した偶数を表示する
		fmt.Println(evenOk, "偶数受信 = ", evenVal)
		// 受信した奇数を表示する
		fmt.Println(oddOk, "奇数受信 = ", oddVal)
	}
}
