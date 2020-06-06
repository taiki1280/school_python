package main

import "fmt"

func main() {
	// 変数 limti（上限の整数） を宣言（型 int）
	// ＿＿＿（１）＿＿＿
	var limit int
	// 変数 total（合計）を宣言（型 int）と 0 に初期化
	// ＿＿＿（２）＿＿＿
	var total int = 0
	// 上限の整数を入力
	// 入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Print("上限の整数を入力してください -> ")
	// キーボードから整数を入力し、変数 limit に保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&limit)
	// １から上限の整数までの整数値の合計を求める
	// ＿＿＿（５）＿＿＿ {
	for i := 1; i <= limit; i++ {
		// ＿＿＿（６）＿＿＿ {
		if i%2 == 1 {
			total += i
		}
	}
	// 合計値を表示
	// ＿＿＿（7）＿＿＿
	fmt.Printf("1から%dまでの奇数の合計は %d です。", limit, total)
}
