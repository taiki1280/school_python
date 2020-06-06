package main

import "fmt"

func main() {
	// 変数 number1, number2（型 int）を宣言
	// ＿＿＿（１）＿＿＿
	var number1, number2 int
	// ポインタ変数 ptr1, ptr2（型 *int）を宣言
	// ＿＿＿（２）＿＿＿
	var ptr1, ptr2 *int
	// ２つの整数値をキーボードから入力
	// 入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Print("整数１を入力してください -> ")
	// キーボードから整数値を入力し、変数 number1 に保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&number1)
	// 入力促進
	// ＿＿＿（５）＿＿＿
	fmt.Print("整数２を入力してください -> ")
	// キーボードから整数値を入力し、変数 number1 に保存
	// ＿＿＿（６）＿＿＿
	fmt.Scan(&number2)
	// 変数 number1 のアドレスをポインタ変数 ptr1 に代入
	// ＿＿＿（７）＿＿＿
	ptr1 = &number1
	// 変数 number2 のアドレスをポインタ変数 ptr2 に代入
	// ＿＿＿（８）＿＿＿
	ptr2 = &number2
	// ポインタ変数 ptr1, ptr2 を使用して、キーボードから入力した
	// ２つの整数値のたし算をして、変数 addAns に代入
	// ＿＿＿（９）＿＿＿
	addAns := *ptr1 + *ptr2
	// たし算の結果を表示
	// ＿＿＿（１０）＿＿＿
	fmt.Printf("%d + %d = %d", number1, *ptr2, addAns)
}
