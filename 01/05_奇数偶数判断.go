package main

import "fmt"

func main() {
	// 変数 data の宣言（型 int32）
	// ＿＿＿（１）＿＿＿
	var data int32
	// 入力促進
	// ＿＿＿（２）＿＿＿
	fmt.Print("整数値を入力してください -> ")
	// キーボードから整数値を入力
	// ＿＿＿（３）＿＿＿
	fmt.Scan(&data)
	// 整数値が偶数化奇数かを判断
	// if ＿＿＿（４）＿＿＿ {
	fmt.Printf("%d は", data)
	if data%2 == 0 {
		// 偶数だったら
		// ＿＿＿（５）＿＿＿
		fmt.Print("偶数です\n")
		// } ＿＿＿（６）＿＿＿ {
	} else {
		// // 奇数だったら
		// // ＿＿＿（１）＿＿＿
		fmt.Print("奇数です")
	}
}
