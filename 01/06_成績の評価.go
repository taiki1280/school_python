package main

import "fmt"

func main() {
	// 変数 score（得点）を宣言（型 int32）
	// ＿＿＿（１）＿＿＿
	var score int32
	// 変数 evaluation（評価の文字列）を宣言（型 string）
	// ＿＿＿（２）＿＿＿
	var evaluation string
	// キーボードから得点を入力
	// 入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Print("得点を入力してください -> ")
	// キーボードから得点を入力し変数 score に保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&score)
	// 得点を評価
	// ＿＿＿（５）＿＿＿ {
	if score >= 90 {
		// 90 点以上のとき
		evaluation = "S ランク"
		// } ＿＿＿（６）＿＿＿ {
	} else if score >= 80 {
		// 80 点以上のとき
		evaluation = "A ランク"
		// } ＿＿＿（７）＿＿＿ {
	} else if score >= 70 {
		// 70 点以上のとき
		evaluation = "B ランク"
		// } ＿＿＿（８）＿＿＿ {
	} else if score >= 50 {
		// 50 点以上のとき
		evaluation = "C ランク"
		// } ＿＿＿（９）＿＿＿ {
	} else if score >= 40 {
		// 40 点以上のとき
		evaluation = "D ランク"
		// } ＿＿＿（10）＿＿＿ {
	} else {
		// 40 点未満の時
		evaluation = "不合格"
	}
	// 成績評価を表示
	// ＿＿＿（11）＿＿＿
	fmt.Printf("成績の評価は、%sです。", evaluation)
}
