package main

import "fmt"

/**
  Prefecture構造体の定義
  フィールド
    name  県名（型 string）
    population 人口（型 float64）
*/

type Prefecture struct {
	name       string
	population float64
}

/**
  Aomori構造体の定義
  フィールド
    Prefecture  埋め込み
    city  県庁所在地名（型 string）
*/

type Aomori struct {
	Prefecture
	city string
}

/**
Miyagi構造体の定義
フィールド
Prefecture  埋め込み
city1 県庁所在地名（型 string）
city2 主要都市（型　string）
*/

type Miyagi struct {
	Prefecture
	city1 string
	city2 string
}

/**
  Prefecture をレシーバとしたメソッド printInfomation の定義
  メソッド名：printInfomation
  引数：なし
  処理：フィールド内の値を表示
  戻り値：なし
*/

func (x Prefecture) printInfomation() {
	// オーバーライドされる
	// fmt.Printf("%s%f", x.name, x.population)
}

/**
Aomori をレシーバとしたメソッド printInfomation の定義（オーバーライド）
メソッド名：printInfomation
引数：なし
処理：フィールド内の値を表示
戻り値：なし
*/

func (x Aomori) printInfomation() {
	fmt.Printf("県名：%s、人口%f万人\n", x.name, x.population)
	fmt.Printf("県庁所在地：%s\n", x.city)
}

/**
Miyagi をレシーバとしたメソッド printInfomation の定義（オーバーライド）
メソッド名：printInfomation
引数：なし
処理：フィールド内の値を表示
戻り値：なし
*/

func (x Miyagi) printInfomation() {
	fmt.Printf("県名：%s、人口%f万人\n", x.name, x.population)
	fmt.Printf("県庁所在地：%s、主要都市：%s", x.city1, x.city2)
}

func main() {
	// 構造体 Aomori の初期化
	aomori := Aomori{Prefecture{"青森県", 129.6}, "青森市"}
	// 構造体 Miyagi の初期化
	miyagi := Miyagi{Prefecture{"宮城県", 206.4}, "仙台市", "石巻市"}

	// Aomori構造体の printInfomation メソッドを起動
	//   ＿＿＿（１）＿＿＿
	aomori.printInfomation()
	// Miyagi構造体の printInfomation メソッドを起動
	//   ＿＿＿（２）＿＿＿
	miyagi.printInfomation()
}
