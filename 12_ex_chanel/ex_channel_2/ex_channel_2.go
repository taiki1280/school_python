package main

import (
	"fmt"
	"math/rand"
	"time"
)

/**
チャンネル送信関数の定義
関数シグニチャ
関数名：sendRandom
引数：
exitNum：停止条件となる数値（型 int）
s：送信チャンネル（型 chan<- i）
処理：
１～１００までの乱数を生成し、チャネルに送信する。
しかし、停止条件となる数値が乱数として発生したら送信を終了する
戻り値：なし
*/
func sendRandom(exitNum int, s chan<- int) {
	rand.Seed(time.Now().UnixNano())
	for {
		randNum := rand.Intn(100) + 1
		if randNum == exitNum {
			fmt.Println("Break == ", exitNum)
			s <- randNum
			break
		}
		fmt.Println("乱数送信 = ", randNum)
		s <- randNum
	}
	close(s)
}

func main() {
	// チャネルの作成
	// ＿＿＿（１）＿＿＿  // 乱数用チャンネル
	randChan := make(chan int)
	/**
	ゴルーチンを生成し、乱数用チャンネルに
	１から１００までの乱数を送信
	停止数値を１０とする
	*/
	// ＿＿＿（２）＿＿＿
	go sendRandom(10, randChan)
	/**
	受信プロセス
	*/
	for {
		// 乱数用チャンネルより乱数を受信する
		// ＿＿＿（３）＿＿＿
		randomVal, ok := <-randChan
		/**
		乱数送信ゴルーチンの処理が終わるのを判断し
		終了したら受信を終了する
		*/
		if !ok {
			break
		}
		// 受信した乱数数を表示する
		fmt.Println(ok, "乱数受信 = ", randomVal)
	}
}
