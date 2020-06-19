package main

import "fmt"

// インタフェース型 CalcInt の定義
// メソッド名：Calc
// 引数：a, b たし算、ひき算、かけ算、剰余算を行う整数値（型 int）
// 処理：たし算、ひき算、かけ算、剰余算を行い値を返す
// 戻り値；たし算、ひき算、かけ算、剰余算の結果（型 int）
type CalcInt interface {
	Calc(a int, b int) int
}

// インタフェース型 CalcFloat の定義
// メソッド名：Calc
// 引数：a, b わり算を行う整数値（型 int）
// 処理：わり算を行い値を返す
// 戻り値；わり算の結果（型 int）
type CalcFloat interface {
	Calc(a int, b int) float64
}

// たし算構造体 Add の定義
// ＿＿＿（１）＿＿＿
type Add struct{}

// ひき算構造体 Sub の定義
// ＿＿＿（２）＿＿＿
type Sub struct{}

// かけ算構造体 Mul の定義
// ＿＿＿（３）＿＿＿
type Mul struct{}

// わり算構造体 Div の定義
// ＿＿＿（４）＿＿＿
type Div struct{}

// 剰余構造体 Mod の定義
// ＿＿＿（５）＿＿＿
type Mod struct{}

// たし算メソッドの実装（インタフェース CalCInt）
// レシーバ：Add
// メソッド名：Calc
// 引数：a, b たし算する整数（型 int）
// 処理：２つの整数をたし算して返す
// 戻り値：たし算の結果（型 int）
func (x Add) Calc(a int, b int) int {
	return a + b
}

// ひき算メソッドの実装（インタフェース CalCInt）
// レシーバ：Sub
// メソッド名：Calc
// 引数：a, b ひき算する整数（型 int）
// 処理：２つの整数をひき算して返す
// 戻り値：ひき算の結果（型 int）
func (x Sub) Calc(a int, b int) int {
	return a - b
}

// かけ算メソッドの実装（インタフェース CalCInt）
// レシーバ：Mul
// メソッド名：Calc
// 引数：a, b かけ算する整数（型 int）
// 処理：２つの整数をかけ算して返す
// 戻り値：かけ算の結果（型 int）
func (x Mul) Calc(a int, b int) int {
	return a * b
}

// わり算メソッドの実装（インタフェース CalCFloat）
// レシーバ：Div
// メソッド名：Calc
// 引数：a, b わり算する整数（型 int）
// 処理：２つの整数をわり算して返す
// 戻り値：わり算の結果（型 float）
func (x Div) Calc(a int, b int) float64 {
	return float64(a) / float64(b)
}

// 剰余メソッドの実装（インタフェース CalCInt）
// レシーバ：Mod
// メソッド名：Calc
// 引数：a, b 剰余算する整数（型 int）
// 処理：２つの整数を剰余算して返す
// 戻り値：剰余算の結果（型 int）
func (x Mod) Calc(a int, b int) int {
	return a % b
}

func main() {
	// 構造体 add の宣言（型 Add）
	// ＿＿＿（６）＿＿＿
	var add Add
	// 構造体 sub の宣言（型 Sub）
	// ＿＿＿（７）＿＿＿
	var sub Sub
	// 構造体 mul の宣言（型 Mul）
	// ＿＿＿（８）＿＿＿
	var mul Mul
	// 構造体 div の宣言（型 Div）
	// ＿＿＿（９）＿＿＿
	var div Div
	// 構造体 mod の宣言（型 Mod）
	// ＿＿＿（10）＿＿＿
	var mod Mod
	// CalcIntインタフェース型の変数 calcInt の宣言
	// ＿＿＿（11）＿＿＿
	var calcInt CalcInt
	// CalcFloatインタフェース型の変数 calcFloat の宣言
	// ＿＿＿（12）＿＿＿
	var calcFloat CalcFloat

	// 計算させる変数 number1, number2 の宣言（型 int）
	var number1, number2 int

	// ２つの整数値を入力
	fmt.Print("整数値１,整数値２ = ")
	fmt.Scanf("%d,%d", &number1, &number2)

	// ポリモーフィズム = 呼び出し方は全く同じだが処理内容が異なること
	// たし算の結果を表示
	// ＿＿＿（13）＿＿＿
	calcInt = add
	// fmt.Printf("%d + %d = %d\n",number1, number2, ＿＿＿（14）＿＿＿)
	fmt.Printf("%d + %d = %d\n", number1, number2, calcInt.Calc(number1, number2))

	// ひき算の結果を表示
	// ＿＿＿（15）＿＿＿
	calcInt = sub
	// fmt.Printf("%d - %d = %d\n", number1, number2, ＿＿＿（16）＿＿＿)
	fmt.Printf("%d - %d = %d\n", number1, number2, calcInt.Calc(number1, number2))

	// かけ算の結果を表示
	// ＿＿＿（17）＿＿＿
	calcInt = mul
	// fmt.Printf("%d * %d = %d\n", number1, number2, ＿＿＿（18）＿＿＿)
	fmt.Printf("%d * %d = %d\n", number1, number2, calcInt.Calc(number1, number2))

	// わり算の結果を表示
	// ＿＿＿（19）＿＿＿
	calcFloat = div
	// fmt.Printf("%d / %d = %f\n", number1, number2, ＿＿＿（20）＿＿＿)
	fmt.Printf("%d / %d = %f\n", number1, number2, calcFloat.Calc(number1, number2))

	// 剰余算の結果を表示
	// ＿＿＿（21）＿＿＿
	calcInt = mod
	// fmt.Printf("%d %% %d = %d\n", number1, number2, ＿＿＿（22）＿＿＿)
	fmt.Printf("%d %% %d = %d\n", number1, number2, calcInt.Calc(number1, number2))
}
