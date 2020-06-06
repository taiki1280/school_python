package main

import "fmt"

// 円周率 PAI（定数）3.14159 の宣言
// ＿＿＿（１）＿＿＿
const PAI float64 = 3.14159

func main() {
	// 変数 radius （半径）の宣言（型 float64）
	// ＿＿＿（２）＿＿＿
	var radius float64
	// キーボードから半径を入力
	// 入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Print("半径を入力してください -> ")
	// キーボードから半径を入力し、変数 radius に保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&radius)
	// 円周を計算し、変数 circumference に保存
	// ＿＿＿（５）＿＿＿
	circumference := 2 * radius * PAI
	// 面積を計算し、変数 area に保存
	// ＿＿＿（６）＿＿＿
	area := radius * radius * PAI
	// 円周を表示
	// ＿＿＿（７）＿＿＿
	fmt.Printf("円周は %.6f です。\n", circumference)
	// 面積を表示
	// ＿＿＿（８）＿＿＿
	// fmt.Printf("円周は %.6f です。")
	fmt.Printf("面積は %.6f です。", area)
}
