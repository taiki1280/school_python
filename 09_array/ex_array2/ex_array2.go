package main

import "fmt"

func main() {
	/**
	  int 型配列、list の宣言と初期化
	  配列名： list
	  型： int
	  要素数：5
	  初期化値：1, 2, 3, 4, 5
	*/

	list := [5]int{1, 2, 3, 4, 5}
	//   ＿＿＿（１）＿＿＿

	/**
	  変数 total, evenNumber, oddNumber（型 int）を
	  0 に初期化
	*/
	var total int = 0
	var evenNumber int = 0
	var oddNumber int = 0

	/**
	  配列　list の要素の合計と、偶数の数、奇数の数
	  をもとめる。
	  通常の for文版
	*/
	// total = len(list)
	for _, value := range list {
		if value%2 == 0 {
			evenNumber++
		} else {
			oddNumber++
		}
		total += value
	}
	// for i := 0; i < total; i++ {
	// 	if list[i]%2 == 0 {
	// 		evenNumber++
	// 	} else {
	// 		oddNumber++
	// 	}
	// }

	// 配列 list 全体の表示
	fmt.Println("list = ", list)
	// 配列の合計と偶数値の数、奇数値の数を表示
	fmt.Println("リストの合計 = ", total)
	fmt.Println("偶数値の個数 = ", evenNumber)
	fmt.Println("奇数値の個数 = ", oddNumber)
}
