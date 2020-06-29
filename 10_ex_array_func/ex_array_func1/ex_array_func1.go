package main

import "fmt"

/**
関数 arrayInfo の定義
関数シグニチャ
関数名
arrayInfo
引数
list（型　int型のスライス）
処理
配列の合計値、偶数値の個数、奇数値の個数をもとめる
戻り値
合計（型 int）、偶数値の個数（型 int）、奇数値の個数（型 int）
*/

func arrayInfo(list []int) (int, int, int) {
	total := 0
	evenNumber := 0
	oddNumber := 0
	for _, value := range list {
		total += value
		if value%2 == 0 {
			evenNumber++
		} else {
			oddNumber++
		}
	}
	return total, evenNumber, oddNumber
	// return total
}

func main() {
	/**
	int型配列 list の宣言と初期化
	初期価値：1, 2, 3, 4, 5
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿
	list := []int{1, 2, 3, 4, 5}
	/**
	int型変数 total, evenNumber, oddNumber の宣言
	total 配列の合計値
	evenNumber 配列の偶数値の個数
	oddNumber 配列の奇数値の個数
	*/
	var total, evenNumber, oddNumber int

	// 関数 arrayInfoを呼び出し、
	// 配列の合計値と偶数値の個数と奇数値の個数を求める
	// ＿＿＿＿＿（２）＿＿＿＿＿
	total, evenNumber, oddNumber = arrayInfo(list)

	fmt.Println("list = ", list)
	fmt.Println("リストの合計 = ", total)
	fmt.Println("偶数値の個数 = ", evenNumber)
	fmt.Println("奇数値の個数 = ", oddNumber)
}
