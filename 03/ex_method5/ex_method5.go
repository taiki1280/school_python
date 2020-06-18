package main

import "fmt"

// uint32型から新たに sumUint 型を宣言
// ＿＿＿（１）＿＿＿
type sumUint uint32

// sumUint 型をレシーバにもつ sumUint 型のメソッドを宣言
func (number sumUint) sumCalc(mod int) int {
	var ans int
	for i := 1; i < int(number); i++ {
		if i%mod == 0 {
			ans += i
		}
	}
	return ans
}

func main() {

	// sumUint型の変数を宣言
	var number sumUint
	// 倍数
	var mod int

	// 上限数を入力
	fmt.Print("正の整数値 = ")
	fmt.Scanln(&number)
	// 倍数を入力
	fmt.Print("倍数 = ")
	fmt.Scanln(&mod)

	// sumUint型のメソッドを呼び出して、１から上限数までの合計を表示
	// fmt.Printf("1 から %d までの %d の倍数の合計 = %d\n", number, mod, ＿＿＿（２）＿＿＿)
	fmt.Printf("1 から %d までの %d の倍数の合計 = %d\n", number, mod, number.sumCalc(mod))
}
