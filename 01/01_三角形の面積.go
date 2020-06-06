package main

import "fmt"

func main() {
	// 底辺（bottom）、高さ（height）を宣言、型float64
	// ＿＿＿（１）＿＿＿
	var bottom, height float64
	//面積（area）を宣言、型float64
	// ＿＿＿（２）＿＿＿
	var area float64
	//キーボードから底辺と高さを入力
	//入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Println("底辺を入力してください")
	//キーボードから底辺を入力し、変数bottomに保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&bottom)
	//入力促進
	// ＿＿＿（５）＿＿＿
	fmt.Println("高さを入力してください")
	//キーボードから高さを入力
	// ＿＿＿（６）＿＿＿
	fmt.Scan(&height)
	//三角形の面積を求めareaに代入
	// ＿＿＿（７）＿＿＿
	area = bottom * height * 1 / 2
	//三角形の面積を表示
	// ＿＿＿（８）＿＿＿
	fmt.Println("三角形の面積は", area, "です。")
}
