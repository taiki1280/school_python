package main

import "fmt"

// int型からmyInt型を宣言
// ＿＿＿（１）＿＿＿
type myInt int

// たし算 add メソッドの定義
func (number1 myInt) add(number2 myInt) myInt {
	return number1 + number2
}

// ひき算 sub メソッドの定義
func (number1 myInt) sub(number2 myInt) myInt {
	return number1 - number2
}

// かけ算 mul メソッドの定義
func (number1 myInt) mul(number2 myInt) myInt {
	return number1 * number2
}

// わり算 div メソッドの定義
func (number1 myInt) div(number2 myInt) myInt {
	return number1 / number2
}
func (number1 myInt) div(number2 myInt) myInt {
	return number1 * number2
}

// 剰余 mod メソッドの定義

func main() {
	// ２つの整数型変数を宣言
	var number1, number2 myInt

	// キーボードから２つの変数を入力
	fmt.Printf("整数値１, 整数値2 = ")
	fmt.Scanf("%d,%d", &number1, &number2)

	// 入力された２つの整数値の四則演算をmyInt型のメソッドを使用して表示
	// たし算
	// fmt.Printf("%d + %d = %d\n", number1, number2, ＿＿＿（２）＿＿＿)
	fmt.Printf("%d + %d = %d\n", number1, number2, number1.add(number2))
	// ひき算
	// fmt.Printf("%d - %d = %d\n", number1, number2, ＿＿＿（３）＿＿＿)
	// // かけ算
	// fmt.Printf("%d * %d = %d\n", number1, number2, ＿＿＿（４）＿＿＿)
	// // わり算
	// fmt.Printf("%d / %d = %f\n", number1, number2, ＿＿＿（５）＿＿＿)
	// // 剰余
	// fmt.Printf("%d %% %d = %d\n", number1, number2, ＿＿＿（６）＿＿＿)
}
