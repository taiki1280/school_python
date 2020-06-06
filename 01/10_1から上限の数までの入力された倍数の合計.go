package main

import "fmt"

func main() {
	// 変数 limti（上限の整数） を宣言（型 int）
	// ＿＿＿（１）＿＿＿
	var limit int
	// 変数 total（合計）を宣言（型 int）と 0 に初期化
	// ＿＿＿（２）＿＿＿
	var total int = 0
	// 変数 mod （倍数）を宣言（型 int）
	// ＿＿＿（３）＿＿＿
	var mod int

	// 上限の整数を入力
	// 入力促進
	// ＿＿＿（４）＿＿＿
	fmt.Print("上限の整数を入力してください -> ")
	// キーボードから整数を入力し、変数 limit に保存
	// ＿＿＿（５）＿＿＿
	fmt.Scan(&limit)

	// 倍数を入力
	// 入力促進
	// ＿＿＿（６）＿＿＿
	fmt.Print("倍数の整数を入力してください -> ")
	// キーボードから倍数を入力し、変数 mod に保存
	// ＿＿＿（７）＿＿＿
	fmt.Scan(&mod)

	// １から上限の整数までの倍数の合計を求める
	// ＿＿＿（８）＿＿＿ {
	for i := 1; i <= limit; i++ {
		// ＿＿＿（９）＿＿＿ {
		if i%mod == 0 {
			total += i
		}
	}
	// 合計値を表示
	// ＿＿＿（１０）＿＿＿
	fmt.Printf("1から%dまでの%dの倍数の合計は %d です。", limit, mod, total)
}
