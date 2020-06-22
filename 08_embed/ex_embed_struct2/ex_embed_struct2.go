package main

import "fmt"

/**
  Profession構造体の定義
  フィールド
    department  所属コース（型 string）
    subject 担当科目（型 string）
*/

type Profession struct {
	department string
	subject    string
}

/**
  Health構造体の定義
  フィールド
    height  身長（型 float64）
    weight  体重（型 float64）
*/

type Health struct {
	height float64
	weight float64
}

/**
  Person構造体の定義
  フィールド
    Profession  埋め込み
    Health  埋め込み
    name  氏名（型 string）
    age 年齢（型 int）
*/

type Person struct {
	Profession
	Health
	name string
	age  int
}

/**
  Infomation インタフェース型の定義
  メソッド
    dispInfo
      引数：なし
      処理：構造体の各フィールドの値を表示
      戻り値：んあし
    calcBMI
      引数：なし
      処理：BMI値を計算する
      戻り値：BMI値（型 float64）
*/

type Information interface {
	dispInfo()
	calcBMI() float64
	calcSuitableWeight() float64
}

/**
  Person をレシーバとしたメソッド dispInfo の実装
  メソッド名：dispInfo
  引数：なし
  処理：構造体 Person の各フィールドの値を表示
  戻り値：なし
*/

func (x Person) dispInfo() {
	fmt.Printf("氏名：%s\n", x.name)
	fmt.Printf("年齢：%d\n", x.age)
	fmt.Printf("身長：%f、体重：%f\n", x.height, x.weight)
	fmt.Printf("所属部署：%s\n", x.department)
	fmt.Printf("担当科目：%s\n", x.subject)
}

/**
  Person をレシーバとしたメソッド calcBMI の実装
  メソッド名：calcBMI
  引数：なし
  処理：BMI値の計算をする
  戻り値：BMI値（型 float64）
*/

func (x Person) calcBMI() float64 {
	return x.weight / (float64(x.height/100) * float64(x.height/100))
}

/**
  Person をレシーバとしたメソッド calcSuitableWeight() の実装
  メソッド名：calcSuitableWeight()
  引数：なし
  処理：適正体重を計算
  戻り値：適正体重（型 float64）
*/

func (x Person) calcSuitableWeight() float64 {
	return float64(x.height/100) * float64(x.height/100) * 22
}

func main() {
	// 構造体 Person の初期化
	person := Person{
		Profession{"東京情報校", "先端プログラミング言語"},
		Health{182.5, 78.2}, "鈴木一朗", 38}

	var info Information

	info = person
	// person構造体の dispInfo メソッドをインタフェースInfomation経由で起動
	// ＿＿＿（１）＿＿＿
	info.dispInfo()
	// BMI値を表示
	// fmt.Printf("BMI値 = %f\n", ＿＿＿（２）＿＿＿)
	fmt.Printf("BMI値 = %f\n", info.calcBMI())
	// 適正体重を表示
	// fmt.Printf("適正体重 = %f\n", ＿＿＿（３）＿＿＿)
	fmt.Printf("適正体重 = %f\n", info.calcSuitableWeight())
}
