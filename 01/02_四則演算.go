package main

import "fmt"

func main() {
	// 変数 data1, data2 を宣言（型 int32）
	// ＿＿＿（１）＿＿＿
	var data1, data2 int32
	// 変数 addAns, subAns, mulAns, modAns を宣言（型 int32）
	// ＿＿＿（２）＿＿＿
	var addAns, subAns, mulAns, modAns int32
	// 変数 divAns を宣言（型 float32）
	// ＿＿＿（３）＿＿＿
	var divAns float32

	// 入力促進
	// ＿＿＿（４）＿＿＿
	print("１つ目の整数値を入力してください -> ")
	// キーボードから 1 つ目の整数値を入力
	// ＿＿＿（５）＿＿＿
	fmt.Scan(&data1)
	// data1 = 10

	// 入力促進
	// ＿＿＿（６）＿＿＿
	print("２つ目の整数値を入力してください -> ")
	// キーボードから２つ目の整数値を入力
	// ＿＿＿（７）＿＿＿
	fmt.Scan(&data2)
	// data2 = 3

	// 四則演算
	// 加算
	// ＿＿＿（８）＿＿＿
	addAns = data1 + data2
	// 減算
	// ＿＿＿（９）＿＿＿
	subAns = data1 - data2

	// 乗算
	// ＿＿＿（10）＿＿＿
	mulAns = data1 * data2

	// 除算
	// ＿＿＿（11）＿＿＿
	divAns = float32(data1) / float32(data2)

	// 剰余
	// ＿＿＿（12）＿＿＿
	modAns = data1 % data2

	// 四則演算結果を表示
	// 加算
	// ＿＿＿（13）＿＿＿
	fmt.Print(data1, " + ", data2, " = ", addAns, "\n")
	// 減算
	// ＿＿＿（14）＿＿＿
	fmt.Printf("%d - %d = %d\n", data1, data2, subAns)
	// fmt.Println(data1 int + "aa" + data2 int + " = \n" + subAns int)
	// 乗算
	// ＿＿＿（15）＿＿＿
	fmt.Println(data1, "×", data2, "=", mulAns)

	// 徐算
	// ＿＿＿（16）＿＿＿
	fmt.Printf("%d ÷ %d = %g\n", data1, data2, divAns)

	// 剰余
	// ＿＿＿（17）＿＿＿
	fmt.Printf("%d ÷ %d = %d 余り %d\n ", data1, data2, int32(divAns), modAns)

}
