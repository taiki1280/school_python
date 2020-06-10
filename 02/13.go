package main

import "fmt"

func main() {
	var inputStr string
	//無限ループ＿＿＿（１）＿＿＿{

	for {
		//入力促進fmt.Print("文字列入力=")
		fmt.Print("文字列入力=")
		//キーボードから文字列を入力し、変数inputStrに保存
		fmt.Scanln(&inputStr)
		//入力文字列が"END"か否かを判断＿＿＿（２）＿＿＿{
		if inputStr == "END" {
			//入力文字列が"END"であれば無限ループを抜ける
			break
		}
		//表示
		fmt.Println("出力=", inputStr)
	}
	//プログラム終了表示
	fmt.Println("プログラム終了")
}
