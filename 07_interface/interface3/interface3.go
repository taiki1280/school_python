package main

import "fmt"

/**
Person型構造体の定義
フィールド
name: 氏名（型 string）
age：年齢（型 int）
height：身長（型 float64）
weight：体重（型 float64）
*/

// Person 構造体
type Person struct {
	name   string
	age    int
	height float64
	weight float64
}

/**
Obesityインターフェース型の定義
メソッド
CalcBMI
引数：なし
処理：BMI値を計算する
戻り値：BMI値（型 float64）
CalcSuitableWeight
引数：なし
処理：適正体重を計算する
戻り値：適正体重（型 float64）
CalcObesity
引数：なし
処理：肥満度を判定する
戻り値：肥満度を表す文字列（型 string）
DispObesity
引数：なし
処理：氏名、年齢、身長、体重、BMI値、適正体重、肥満度を表示する
戻り値：なし
*/

// Obesity インターフェース
type Obesity interface {
	CalcBMI() float64
	CalcSuitableWeight() float64
	CalcObesity() string
	DispObesity()
}

/**
Person型をレシーバとするObesityインタフェース型の
CalcBMIメソッドを実装
*/

// CalcBMI メソッド
func (x Person) CalcBMI() float64 {
	return (x.height / 100) * (x.height / 100) * x.weight
}

/**
Person型をレシーバとするObesityインタフェース型の
CalcSuitableWeightメソッドを実装
*/

// CalcSuitableWeight メソッド
func (x Person) CalcSuitableWeight() float64 {
	return (x.height / 100) * (x.height / 100) * 22
}

/**
Person型をレシーバとするObesityインタフェース型の
CalcObesityメソッドを実装
*/

// CalcObesity メソッド
func (x Person) CalcObesity() string {
	bmi := x.CalcBMI()
	if bmi >= 40 {
		return "肥満(4度)"
	} else if bmi >= 35 {
		return "肥満(3度)"
	} else if bmi >= 30 {
		return "肥満(2度)"
	} else if bmi >= 25 {
		return "肥満(2度)"
	} else if bmi >= 18.5 {
		return "普通体重"
	}
	// } else if bmi < 18.5 {
	return "低体重(痩せ型)"
}

/**
Person型をレシーバとするObesityインタフェース型の
DispObesityメソッドを実装
*/

// DispObesity メソッド
func (x Person) DispObesity() {
	fmt.Printf("氏名：%s\n", x.name)
	fmt.Printf("年齢：%d\n", x.age)
	fmt.Printf("体重：%f\n", x.weight)
	fmt.Printf("BMI：%f\n", x.CalcBMI())
	fmt.Printf("適正体重：%f\n", x.CalcSuitableWeight())
	fmt.Printf("肥満度判定：%s\n", x.CalcObesity())
}

func main() {
	// Person型構造体 person の宣言
	// ＿＿＿（１）＿＿＿
	var person Person
	// Obesity型インタフェース ob の宣言
	// ＿＿＿（２）＿＿＿
	var ob Obesity

	// 氏名の入力
	fmt.Print("名前 = ")
	fmt.Scanln(&person.name)
	// 年齢の入力
	fmt.Print("年齢 = ")
	fmt.Scanln(&person.age)
	// 身長の入力
	fmt.Print("身長（ｃｍ単位） = ")
	fmt.Scanln(&person.height)
	// 体重の入力
	fmt.Print("体重（ｋｇ単位） = ")
	fmt.Scanln(&person.weight)

	// Obesity型インタフェース ob に
	// Person型構造体 person を代入
	// ＿＿＿（３）＿＿＿
	ob = person
	// ob を使用して（インタフェース Obesity経由で）
	// DispObesityメソッドを起動
	// ＿＿＿（４）＿＿＿
	ob.DispObesity()
}
