package main

import (
	"fmt"
	"math/rand"
	"os"
	"time"
)

func main() {

	// チャネルの作成
	// ch1 := ＿＿＿＿＿（１）＿＿＿＿＿     // 乱数用チャンネル
	ch1 := make(chan int)
	// ch2 := ＿＿＿＿＿（２）＿＿＿＿＿  　　// 挨拶用チャンネル
	ch2 := make(chan string)

	// ゴルーチン起動（送信側）
	/**
	無名関数の定義
	引数：exitNum 乱数の生成を終了させる数値（型 int）
	処理：
	０～９までの乱数と、その乱数に対応する各国の挨拶を
	それぞれチャンネルに送信する
	もし、指定された数値と生成された乱数が同じなら
	チャンネルへの送信を終了する
	戻り値；なし
	*/
	go func(exitNum int) {
		// 各国の挨拶
		// message := ＿＿＿（３）＿＿＿{"Hello", "Hallo", "Bonjour", "Ciao", "Hola",
		message := []string{"Hello", "Hallo", "Bonjour", "Ciao", "Hola", "Olá", "Privet", "Saluton", "Kaixo", "こんにちは"}
		for {
			// ０～９の間で乱数を発生させる
			rand.Seed(time.Now().UnixNano())
			randNum := rand.Intn(10)
			
			// 指定された乱数なら無限ループを抜ける
			if randNum == exitNum {
				fmt.Printf("指定された数値[%d]を受け取ったため処理を終了しました。", exitNum)
				break
			}
			// select文を使用して、ch1またはch2への送信
			select {
			case ch1 <- randNum:
				fmt.Printf("ch1への乱数[%d]の送信\n", randNum)
			case ch2 <- message[randNum]:
				fmt.Printf("ch2への文字[%s]の送信\n", message[randNum])
			}
		}
		// 終了
		os.Exit(0)
	}(5)

	// 無限ループ（受信側）
	for {
		// select文を使用して、ch1またはch2からの受信
		select {
		case receiveNum := <-ch1:
			fmt.Printf("ch1からの乱数[%d]受信\n", receiveNum)
		case receiveMsg := <-ch2:
			fmt.Printf("ch2からの文字[%s]受信\n", receiveMsg)
		}
	}
}
