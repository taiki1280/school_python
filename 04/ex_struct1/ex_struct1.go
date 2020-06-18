package main

import "fmt"

// 構造体型 Pair の定義
type Pair struct {
	number1 int
	number2 int
}

func main() {
	// Pair型変数 data の宣言
	// ＿＿＿（１）＿＿＿
	var data Pair

	// ２つの整数値をキーボードから入力
	fmt.Print("整数１, 整数２ = ")
	// fmt.Scanf("%d,%d", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿)
	fmt.Scanf("%d,%d", &data.number1, &data.number2)

	//入力した２つの整数値のたし算をして表示
	// fmt.Printf("%d + %d = %d\n",＿＿＿（４）＿＿＿, ＿＿＿（５）＿＿＿, ＿＿＿（６）＿＿＿)
	fmt.Printf("%d + %d = %d\n", data.number1, data.number2, data.number1+data.number2)
}
