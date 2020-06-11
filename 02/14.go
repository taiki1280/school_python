/**continue文１から１０００までの合計を求めるがキーボードから入力された倍数を除く合計を求める*/
package main

import "fmt"

func main() {
	//変数total（合計値）の初期化、型int
	var total int = 0
	//変数mod（倍数）の宣言、型int
	var mod int
	//キーボードから倍数を入力し変数modに保存
	//入力促進
	fmt.Print("倍数を入力=")
	//入力
	fmt.Scanln(&mod)
	//１から１０００までの入力された倍数を除く合計を求める
	// ＿＿＿（１）＿＿＿{
	for i := 1; i < 1000; i++ {

		//入力された倍数か否かを判断＿＿＿（２）＿＿＿{
		if i%7 == 0 {
			continue
			//入力された倍数だったら処理をスキップ＿＿＿（３）＿＿＿}
		}
		//合計を求める
		total += i
	}
	//入力された倍数を除く合計を表示
	fmt.Printf("１から１０００までの、%dの倍数を除く合計=%d\n", mod, total)
}
