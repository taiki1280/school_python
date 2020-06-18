package main

import "fmt"

// Pair の定義
type Pair struct {
	number1 int
	number2 int
}

// 構造体 Pair をレシーバとする
// 四則演算を行うメソッドの定義

// たし算メソッド add の定義
func (data Pair) add() int {
	return data.number1 + data.number2
}

// ひき算メソッド sub の定義
func (data Pair) sub() int {
	return data.number1 - data.number2
}

// かけ算メソッド mul の定義
func (data Pair) mul() int {
	return data.number1 * data.number2
}

// わり算メソッド div の定義
func (data Pair) div() float64 {
	return float64(data.number1) / float64(data.number2)
}

// 剰余メソッド mod の定義
func (data Pair) mod() int {
	return data.number1 % data.number2
}

// 構造体 Pair 型変数 data の宣言
func main() {
	//   ＿＿＿（１）＿＿＿
	var data Pair

	// ２つの整数値を入力し、構造体のメンバに保存
	fmt.Print("整数１, 整数２ = ")
	fmt.Scanf("%d,%d", &data.number1, &data.number2)

	// add メソッドを呼び出し、たし算の結果を表示
	// fmt.Printf("%d + %d = %d\n", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿, ＿＿＿（４）＿＿＿)
	fmt.Printf("%d + %d = %d\n", data.number1, data.number2, data.add())

	// sub メソッドを呼び出し、ひき算の結果を表示
	// fmt.Printf("%d - %d = %d\n", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿, ＿＿＿（５）＿＿＿)
	fmt.Printf("%d - %d = %d\n", data.number1, data.number2, data.sub())

	// mul メソッドを呼び出し、かけ算の結果を表示
	// fmt.Printf("%d * %d = %d\n", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿, ＿＿＿（６）＿＿＿)
	fmt.Printf("%d * %d = %d\n", data.number1, data.number2, data.mul())

	// div メソッドを呼び出し、わり算の結果を表示
	//   fmt.Printf("%d / %d = %f\n", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿, ＿＿＿（７）＿＿＿)
	fmt.Printf("%d / %d = %f\n", data.number1, data.number2, data.div())

	// mod メソッドを呼び出し、剰余の結果を表示
	// fmt.Printf("%d %% %d = %d\n", ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿, ＿＿＿（８）＿＿＿)
	fmt.Printf("%d %% %d = %d\n", data.number1, data.number2, data.mod())
}
