package main

import "fmt"

func main() {
	//   スライス（型 int）list の宣言と初期化
	//   初期化される値
	//   　1, 2, 3, 4, 5, 6, 7, 8, 9, 10
	//   ＿＿＿（１）＿＿＿
	list := []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10}

	//   変数 total, evenNumber, oddNumber（型 int）を
	//   0 に初期化
	var total int = 0
	var evenNumber int = 0
	var oddNumber int = 0

	//   変数 upper, lower の宣言
	//   upper スライスの上限（型 int）
	//   lower スライスの下限（型 int）
	var upper, lower int

	//   キーボードから、スライスの上限値と下限値を入力する
	fmt.Println("スライス前 list = ", list)
	fmt.Print("下限値,上限値 = ")
	fmt.Scanf("%d,%d", &lower, &upper)

	//   スライス list から下限値から上限値までの要素を
	//   切り出し、cutOut に代入
	// ＿＿＿（２）＿＿＿
	cutOut := list[lower : upper+1]

	//   スライスから切り出されたスライスの
	//   合計、偶数値の個数、奇数値の個数をもとめる
	//   for-range 使用

	for _, v := range list {
		total += v
		if v%2 == 0 {
			evenNumber++
		} else {
			oddNumber++
		}
	}
	fmt.Println("list = ", list)
	fmt.Println("cutOut = ", cutOut)
	fmt.Println("合計 = ", total)
	fmt.Println("偶数値の個数 = ", evenNumber)
	fmt.Println("奇数値の個数 = ", oddNumber)
}
