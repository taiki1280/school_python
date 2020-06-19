package main

import "fmt"

/**
図形の面積と周辺の長さを求めるメソッドを定義する
インタフェース Figure の定義
メソッド area 面積をもとめる 戻り値：面積（型 float64）
メソッド length 周辺の長さをもとめる　戻り値：周辺の長さ（型 float64）
メソッド display 面積、周辺の長さを表示する　戻り値：なし
*/

type Figure interface {
	area() float64
	length() float64
	display()
}

/**
長方形構造体 RectAngle の定義
フィールド
widht 幅（型 float64）
height 高さ（型 float64）
*/

type RectAngle struct {
	width  float64
	height float64
}

/**
円構造体 Circle の定義
フィールド
radius 半径（型 float64）
*/

type Circle struct {
	radius float64
}

// 長方形の面積をもとめるメソッドを実装（Figureインタフェース）
func (x RectAngle) area() float64 {
	return x.height * x.width
}

// 円の面積をもとめるメソッドを定義（Figureインタフェース）
func (x Circle) area() float64 {
	return x.radius * x.radius * 3.14
}

// 長方形の周辺の長さをもとめるメソッドを実装（Figureインタフェース）
func (x RectAngle) length() float64 {
	return 2*x.height + 2*x.width
}

// 円周をもとめるメソッドを実装（Figureインタフェース）
func (x Circle) length() float64 {
	return 2 * x.radius * 3.14
}

// 長方形の面積と周辺の長さを表示するメソッドの定義（Figureインタフェース）
func (x RectAngle) display() {
	fmt.Printf("[長方形の面積 = %f] [長方形の長さ = %f]\n", x.area(), x.length())
}

// 円の面積と円周を表示するメソッドの定義（Figureインタフェース）
func (x Circle) display() {
	fmt.Printf("[円の面積 = %f] [円の長さ = %f]\n", x.area(), x.length())
}

func main() {
	// RectAngle構造体変数 rect の宣言
	// ＿＿＿（１）＿＿＿
	var rect RectAngle
	// Circle構造体変数 circle の宣言
	// ＿＿＿（２）＿＿＿
	var circle Circle
	// Figureインターフェース型変数 fig の宣言
	// ＿＿＿（３）＿＿＿
	var fig Figure

	// 幅と高さの入力
	fmt.Print("幅 = ")
	fmt.Scanln(&rect.width)
	fmt.Print("高さ = ")
	fmt.Scanln(&rect.height)

	// Figureインタフェース経由で長方形の面積と長さを表示
	// ＿＿＿（４）＿＿＿
	fig = rect
	// ＿＿＿（５）＿＿＿
	fig.display()

	// 半径を入力
	fmt.Print("半径 = ")
	fmt.Scanln(&circle.radius)

	// Figureインタフェース経由で円の面積と円周を表示
	// ＿＿＿（６）＿＿＿
	fig = circle
	// ＿＿＿（７）＿＿＿
	fig.display()
}
