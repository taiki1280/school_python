package main

import "fmt"

// uint32型から新たに sumUint 型を宣言
// ＿＿＿（１）＿＿＿
type sumUint uint32

// sumUint 型をレシーバにもつ sumUint 型のメソッドを宣言
func (number sumUint) sumCalc() int {
	var ans int
	for i := range make([]int, number) {
		ans += i + 1
	}
	return ans
}

func main() {

	// sumUint型の変数を宣言
	var number sumUint

	fmt.Print("正の整数値 = ")
	fmt.Scanln(&number)

	// sumUint型のメソッドを呼び出して、１から上限数までの合計を表示
	// fmt.Printf("1 から %d までの合計 = %d\n", number, ＿＿＿（２）＿＿＿)
	fmt.Printf("1 から %d までの合計 = %d\n", number, number.sumCalc())
}
