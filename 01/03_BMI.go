package main

import "fmt"

func main() {
	// 変数 height, weight の宣言（型 float64）
	// ＿＿＿（１）＿＿＿
	var height, weight float64
	// 身長（ｃｍ 単位）を入力
	// 入力促進
	// ＿＿＿（２）＿＿＿
	fmt.Print("身長(cm)を入力してください -> ")
	// 身長（ｃｍ単位）を入力し、変数 height に保存
	// ＿＿＿（３）＿＿＿
	fmt.Scan(&height)
	// 体重（ｋｇ単位）を入力
	// 入力促進
	// ＿＿＿（４）＿＿＿
	fmt.Print("体重(kg)を入力してください -> ")
	// 体重（ｋｇ単位）を入力し、変数 weight に保存
	// ＿＿＿（５）＿＿＿
	fmt.Scan(&weight)
	// 変数 height を m 換算し、変数 heightM に代入
	// ＿＿＿（６）＿＿＿
	heightM := height / 100
	// BMI 値を計算し、変数 bmi に代入
	// ＿＿＿（７）＿＿＿
	bmi := weight / (heightM * heightM)
	// 適正体重を計算し、変数 suitableWeight に代入
	// ＿＿＿（８）＿＿＿
	suitableWeight := 22 * heightM * heightM
	// BMI 値を表示
	// ＿＿＿（９）＿＿＿
	fmt.Printf("BMIは %.6f です。\n", bmi)
	// 適正体重を表示
	// ＿＿＿（10）＿＿＿
	fmt.Printf("適正体重は %.6f kgです。", suitableWeight)

}
