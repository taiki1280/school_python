// 未完成プログラム　ファイル名：ex_array_func2.go

package main

import "fmt"

/**
関数 arrayMax の定義
関数シグニチャ
関数名
arrayMax
引数
list（型　int型のスライス）
処理
配列要素の最大値をもとめて返す
戻り値
配列要素の最大値（型 int）
*/

func arrayMax(list []int) int {
	max := 0
	for _, value := range list {
		if value > max {
			max = value
		}
	}
	return max
}

/**
関数 arrayMin の定義
関数シグニチャ
関数名
arrayMin
引数
list（型　int型のスライス）
処理
配列要素の最小値をもとめて返す
戻り値
配列要素の最小値（型 int）
*/

func arrayMin(list []int) int {
	min := 0
	for _, value := range list {
		if value < min {
			min = value
		}
	}
	return min
}

func main() {
	/**
	int型配列 numList の宣言と初期化
	初期価値：-10, 23, -55, 95, -45, 88, 9, -99, 123, 42
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿
	numList := []int{-10, 23, -55, 95, -45, 88, 9, -99, 123, 42}

	// 関数 arrayMax を呼び出し numList の最大値をもとめて変数 max に代入
	// ＿＿＿＿＿（２）＿＿＿＿＿
	max := arrayMax(numList)

	// 関数 arrayMin を呼び出し numList の最小値をもとめて変数 min に代入
	// ＿＿＿＿＿（３）＿＿＿＿＿
	min := arrayMin(numList)

	fmt.Println("numList = ", numList)
	fmt.Printf("最大値 = %d\n", max)
	fmt.Printf("最小値 = %d\n", min)
}
