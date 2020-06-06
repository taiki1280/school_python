package main

import "fmt"

func main() {
	// 変数 channelNumber（チャンネル番号）の宣言（型 unit32）
	// ＿＿＿（１）＿＿＿
	var channelNumber uint32
	// 変数 tvStationName（テレビ局名）の宣言（型 string）
	// ＿＿＿（２）＿＿＿
	var tvStationName string
	// キーボードからチャンネル番号を入力
	// 入力促進
	// ＿＿＿（３）＿＿＿
	fmt.Print("チャンネル番号を入力してください -> ")
	// キーボードからチャンネル番号を入力し、変数 channelNumber に保存
	// ＿＿＿（４）＿＿＿
	fmt.Scan(&channelNumber)
	// チャンネル番号に対応するテレビ局名を選択
	// switch ＿＿＿（５）＿＿＿ {
	switch channelNumber {
	// ＿＿＿（６）＿＿＿:
	case 1:
		tvStationName = "NHK 総合"
		// ＿＿＿（７）＿＿＿:
	case 2:
		tvStationName = "NHK 教育"
		// ＿＿＿（８）＿＿＿:
	case 4:
		tvStationName = "日本テレビ"
		// ＿＿＿（９）＿＿＿:
	case 5:
		tvStationName = "テレビ朝日"
		// ＿＿＿（12）＿＿＿:
	case 6:
		tvStationName = "TBSテレビ"
		// ＿＿＿（10）＿＿＿:
	case 7:
		tvStationName = "テレビ東京"
		// ＿＿＿（13）＿＿＿:
	case 8:
		tvStationName = "フジテレビ"
		// ＿＿＿（11）＿＿＿:
	case 9:
		tvStationName = "TOKYO MX"
		// ＿＿＿（13）＿＿＿:
	case 12:
		tvStationName = "放送大学"
		// ＿＿＿（13）＿＿＿:
	default:
		tvStationName = "存在しない"
	}
	// チャンネル番号に対応するテレビ局名を表示
	// ＿＿＿（14）＿＿＿
	fmt.Printf("チャンネル番号 %d に対応するテレビ番組は %s です。", channelNumber, tvStationName)
}
