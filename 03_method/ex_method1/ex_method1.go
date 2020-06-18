package main

import "fmt"

// int型からmyInt型を宣言
// ＿＿＿（１）＿＿＿
type myInt int

// 2乗を計算する power メソッドの定義
func (number myInt) power() myInt {
	return number * number
}

func main() {
	// 変数 number キーボードから入力された整数の宣言（型 myInt)
	//   ＿＿＿（２）＿＿＿
	var number myInt

	// キーボードから整数値を入力
	fmt.Print("整数値を入力 = ")
	fmt.Scanln(&number)

	// メソッドを呼び出して2乗を計算し、表示する
	//   fmt.Printf("%d の２乗 = %d\n", number, ＿＿＿（３）＿＿＿)
	fmt.Printf("%d の２乗 = %d\n", number, number.power())
}
