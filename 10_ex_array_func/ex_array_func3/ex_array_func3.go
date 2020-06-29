package main

import "fmt"

/**
関数 createEvenList の定義
関数シグニチャ
関数名
createEvenList
引数
list（型　int型のスライス）
処理
配列要素の偶数値を取り出して返す
戻り値
偶数値を要素とするスライス（型 []int）
*/
func createEvenList(list []int) (evenlist []int) {
	for _, value := range list {
		if value%2 == 0 {
			evenlist = append(evenlist, value)
		}
	}
	return
}

/**
関数 createOddList の定義
関数シグニチャ
関数名
createOddList
引数
list（型　int型のスライス）
処理
配列要素の奇数値を取り出して返す
戻り値
奇数値を要素とするスライス（型 []int）
*/

func createOddList(list []int) (oddlist []int) {
	for _, value := range list {
		if value%2 != 0 {
			oddlist = append(oddlist, value)
		}
	}
	return
}

func main() {
	/**
	int型配列 list の宣言と初期化
	初期価値：1, 2, 3, 4, 5, 6, 7, 8, 9, 10
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿
	list := []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10}

	/**
	createEvenList 関数を呼んで
	list の偶数値だけのスライをもとめて
	スライス型変数 evenList に代入
	*/
	// ＿＿＿＿＿（２）＿＿＿＿＿
	evenList := createEvenList(list)

	/**
	createOddList 関数を呼んで
	list の奇数値だけのスライをもとめて
	スライス型変数 oddList に代入
	*/
	// ＿＿＿＿＿（３）＿＿＿＿＿
	oddList := createOddList(list)

	// 結果の表示
	fmt.Println("list = ", list)
	fmt.Println("偶数値のリスト = ", evenList)
	fmt.Println("奇数値のリスト = ", oddList)
}
