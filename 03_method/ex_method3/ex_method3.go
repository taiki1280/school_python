package main

import "fmt"

// int型からmyInt型を宣言
// ＿＿＿（１）＿＿＿
type myInt int

// 偶数か否かを判断する isEven メソッドの定義
func (number myInt) isEven() bool {
	if number%2 == 0 {
		return true
	}
	return false
}

func main() {
	// 入力する整数値の宣言（型 myInt）
	var number myInt

	// キーボードから整数値を入力
	fmt.Print("整数値を入力 = ")
	fmt.Scanln(&number)

	// myInt型のisEvenメソッドを使用して偶数か否かを判断
	// if ＿＿＿（２）＿＿＿ {
	if number.isEven() {
		fmt.Printf("%d は偶数\n", number)
	} else {
		fmt.Printf("%d は奇数\n", number)
	}
}
