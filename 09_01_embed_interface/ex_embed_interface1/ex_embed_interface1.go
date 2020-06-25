package main

import "fmt"

/**
インタフェース型 Add の定義
メソッド名：add
処理：たし算を行い値を返す
戻り値；たし算の結果（型 int）
*/

type Add interface {
	add() int
}

/**
インタフェース型 Sub の定義
メソッド名：sub
処理：ひき算を行い値を返す
戻り値；ひき算の結果（型 int）
*/

type Sub interface {
	sub() int
}

/**
インタフェース型 Mul の定義
メソッド名：mul
処理：かけ算を行い値を返す
戻り値；かけ算の結果（型 int）
*/

type Mul interface {
	mul() int
}

/**
インタフェース型 Div の定義
メソッド名：div
処理：わり算を行い値を返す
戻り値；わり算の結果（型 float64）
*/
type Div interface {
	div() int
}

/**
インタフェース型 Mod の定義
メソッド名：mod
処理：剰余算を行い値を返す
戻り値；剰余算の結果（型 int）
*/

type Mod interface {
	mod() int
}

/**
Add型、Sub型、Mul型、Div型、Mod型インターフェースを継承して（埋め込み）して
Calculate型インタフェース型を定義
*/

type Calculate interface {
	add() Add
	sub() Sub
	mul() Mul
	div() Div
	mod() Mod
}


/**
計算構造体 CalcData の定義
フィールド
number1 計算する数値（型 int）
number2 計算する数値（型 int）
*/

type CalcData struct {
	number1 int
	number2 int
}

// CalcData型構造体に add メソッドを実装



// CalcData型構造体に sub メソッドを実装




// CalcData型構造体に mul メソッドを実装





// CalcData型構造体に div メソッドを実装





// CalcData型構造体に mod メソッドを実装






func main() {

var data CalcData
// 構造体 add の宣言（型 Add）

// Calcインタフェース型の変数 calc の宣言
var calc Calculate

// ２つの整数値を入力
fmt.Print("整数値１,整数値２ = ")
fmt.Scanf("%d,%d", &data.number1, &data.number2)

// たし算の結果を表示
calc = data
// fmt.Printf("%d + %d = %d\n", ＿＿（１）＿＿, ＿＿（２）＿＿, ＿＿（３）＿＿)
fmt.Printf("%d + %d = %d\n", calc.number1, calc.number2, calc.add())
// ひき算の結果を表示
fmt.Printf("%d - %d = %d\n", ＿＿（１）＿＿, ＿＿（２）＿＿, ＿＿（４）＿＿)
// かけ算の結果を表示
fmt.Printf("%d * %d = %d\n", ＿＿（１）＿＿, ＿＿（２）＿＿, ＿＿（５）＿＿)
// わり算の結果を表示
fmt.Printf("%d / %d = %f\n", ＿＿（１）＿＿, ＿＿（２）＿＿, ＿＿（６）＿＿)
// 剰余算の結果を表示
fmt.Printf("%d %% %d = %d\n", ＿＿（１）＿＿, ＿＿（２）＿＿, ＿＿（７）＿＿)
}

