package main

import "fmt"

func main() {
	//   スライス（型 int）list の宣言と初期化
	//   初期化される値
	//   　1, 2, 3, 4, 5, 6, 7, 8, 9, 10
	// ＿＿＿（１）＿＿＿
	list := []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10}

	//   変数 total, evenNumber, oddNumber（型 int）を
	//   0 に初期化

	var total int = 0
	var evenNumber int = 0
	var oddNumber int = 0

	// スライス list が参照する配列要素の合計と、偶数の数、奇数の数をもとめる。

	for _, value := range list {
		total += value
		if value%2 == 0 {
			evenNumber++
		} else {
			oddNumber++
		}
	}

	fmt.Println("list = ", list)
	fmt.Println("リストの合計 = ", total)
	fmt.Println("偶数値の個数 = ", evenNumber)
	fmt.Println("奇数値の個数 = ", oddNumber)
	// fmt.Println("インデックス番号２から４までの切り出し", ＿＿＿（２）＿＿＿)
	fmt.Println("インデックス番号２から４までの切り出し", list[2:4+1])
}
