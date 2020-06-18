package main

import "fmt"

// PAI の宣言（円周率）
const PAI float64 = 3.14

// Circle 型構造体の宣言
// フィールド：raidus　半径（型 float64）
type Circle struct {
	radius float64
}

/**
  Circle型をレシーバとする直径をもとめて返すメソッドの定義
  メソッド名：circum
  引数：なし
  処理：半径から円周をもとめて返す
  戻り値：円周（型 float64）
*/

func (data Circle) circum() float64 {
	return 2 * data.radius * PAI
}

/**
  Circle型をレシーバとする円の面積をもとめて返すメソッドの定義
  メソッド名：area
  引数：なし
  処理：半径から面積をもとめて返す
  戻り値：面積（型 float64）
*/

func (data Circle) area() float64 {
	return data.radius * data.radius * PAI
}

func main() {
	// Circle型変数 data の宣言
	var data Circle

	// 半径を入力し、Circle型構造体 data のフィールド radiusに保存
	fmt.Print("半径 = ")
	fmt.Scanln(&data.radius)

	// circumメソッドを使用して円周を表示
	// fmt.Printf("円周 = %f\n", ＿＿＿（１）＿＿＿)
	fmt.Printf("円周 = %f\n", data.circum())
	// areaメソッドを使用して面積を表示
	// fmt.Printf("面積 = %f\n", ＿＿＿（２）＿＿＿)
	fmt.Printf("面積 = %f\n", data.area())
}
