package main

import "fmt"

// 構造体
type Pair struct {
	number1 int
	number2 int
}

// func(レシーバの変数名 レシーバの型) メソッド名() (戻り値の型)
// func (data Pair) allCalc() (int, int, int, float32, float32) {
func (data Pair) allCalc() (int, int) {
	return data.number1 + data.number2, data.number1 - data.number2
}

func main() {
	// Pair 型変数 data の宣言
	// ＿＿＿（１）＿＿＿
	var data Pair

	// ２つの整数をキーボードから入力し、構造体 Pair のフィールドに保存
	fmt.Print("整数１, 整数２ = ")
	fmt.Scanf("%d,%d", &data.number1, &data.number2)

	// allCalc メソッドを呼び出し、四則演算を行う
	// ＿＿＿（２）＿＿＿
	addAns, subAns := data.allCalc()
	// 四則演算の結果を表示
	// fmt.Printf("%d + %d = %d\n", ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿, addAns)
	fmt.Printf("%d + %d = %d\n", data.number1, data.number2, addAns)

	// fmt.Printf("%d - %d = %d\n", ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿, subAns)
	fmt.Printf("%d - %d = %d\n", data.number1, data.number2, subAns)

	// fmt.Printf("%d * %d = %d\n",
	//   ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿, mulAns)

	// fmt.Printf("%d / %d = %f\n",
	//   ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿, divAns)

	// fmt.Printf("%d %% %d = %d\n",
	//   ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿, modAns)
}
