/*構造体*/
package main

import "fmt"

// Triangle 型構造体
// 宣言フィールド
// bottom 底辺（型 float64）
// height 高さ（型 float64）
type Triangle struct {
	bottom float64
	height float64
}

/**
  Traiangle型をレシーバとする
  ３角形の面積を求めるメソッド area の定義
    メソッド名：area
    引数：なし
    処理：３角形の面積を求めて返す
    戻り値：３角形の面積（型 float64）
*/
func (data Triangle) area() float64 {
	return data.bottom * data.height / 2
}

func main() {
	// Triangle型構造体 data の宣言
	var data Triangle

	// 底辺と高さを入力し
	// それぞれ Triangle型の構造体のフィールドに保存
	fmt.Print("底辺 = ")
	fmt.Scanln(&data.bottom)
	fmt.Print("高さ = ")
	fmt.Scanln(&data.height)

	// ３角形の面積をもとめて表示
	//   fmt.Printf("底辺：%f　高さ：%f の３角形の面積 = %f\n",＿＿＿（１）＿＿＿, ＿＿＿（２）＿＿＿, ＿＿＿（３）＿＿＿)
	fmt.Printf("底辺：%f　高さ：%f の３角形の面積 = %f\n", data.bottom, data.height, data.area())
}
