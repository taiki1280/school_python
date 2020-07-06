package main

import "fmt"

/**
構造体 CarToy の定義
フィールド
name  おもちゃの名前（型 string）
code  おもちゃのコード（型 string）
outlet  おもちゃの販売元（型 stirng）
price 定価（型 int）
*/
type CarToy struct {
	name string
	code string
	outlet string
	price int
}

/**
構造体 TrainToy の定義
フィールド
name  おもちゃの名前（型 string）
code  おもちゃのコード（型 string）
outlet  おもちゃの販売元（型 stirng）
price 定価（型 int）
*/

type TrainToy struct {
	name string
	code string
	outlet string
	price int
}

/**
メソッド displayToy の定義
メソッド名：displayToy
レシーバ：CarToy 構造体のポインタ
引数：なし
処理：
CarToy 構造体のフィールドを表示
戻り値：なし
*/

func (x *CarToy) displayToy() {
	
}

/**
メソッド run の定義
メソッド名：run
レシーバ：CarToy 構造体のポインタ
引数：なし
処理：車のおもちゃの走る音を表示
戻り値：なし
*/

func (x *Cartoy) run() {
	fmt.Printf("run")
}

/**
メソッド displayToy の定義
メソッド名：displayToy
レシーバ：TrainToy 構造体のポインタ
引数：なし
処理：
TrainToy 構造体のフィールドを表示
戻り値：なし
*/

func (x *TrainToy) displayToy() {
	
}

/**
メソッド run の定義
メソッド名：run
レシーバ：TrainToy 構造体のポインタ
引数：なし
処理：電車のおもちゃの走る音を表示
戻り値：なし
*/
func (x *TrainToy) run() {
	
}

func main() {
/**
CarToy 構造体を初期化
変数名 carToy
名前：車のおもちゃ
商品コード：CAR001
販売元：トミー
価格：1200
*/
// ＿＿＿＿＿（１）＿＿＿＿＿
carToy := CarToy{"車のおもちゃ","CAR001","トミー",1200}

/**
TrainToy 構造体を初期化
変数名 trainToy
名前：電車のおもちゃ
商品コード：TRAIN001
販売元：トミー
価格：2800
*/
// ＿＿＿＿＿（２）＿＿＿＿＿
trainToy := TrainToy{"電車のおもちゃ","TRAIN001","トミー",2800}

/**
構造体 carToy の displayToy メソッドを呼び出して
フィールドの情報を表示
*/
＿＿＿＿＿（３）＿＿＿＿＿
// carToy の run メソッドを呼び出す
＿＿＿＿＿（４）＿＿＿＿＿
fmt.Println()
/**
構造体 trainToy の displayToy メソッドを呼び出して
フィールドの情報を表示
*/
＿＿＿＿＿（５）＿＿＿＿＿
//  trainToy の run メソッドを呼び出す
＿＿＿＿＿（６）＿＿＿＿＿
fmt.Println()
}

