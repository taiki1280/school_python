package main

import "fmt"

func main() {
	/**
	make関数によってmapを生成して変数 prefecture に代入
	keyの型 string（県名）
	valueの型 float（県の人口）
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿

	prefecture := make(map[string]float64)

	/**
	東北地方６県の県名と人口をキーボードから入力し
	マップ prefecture に保存する
	*/

	name := ""
	population := 0.0
	for i := 0; i < 6; i++ {
		fmt.Printf("%d件目の入力\n", i+1)
		fmt.Print("県名 = ")
		fmt.Scanln(&name)
		fmt.Print("人口 = ")
		fmt.Scanln(&population)
		prefecture[name] = population
	}

	/**
	for-range文を使用して、mapから県名と人口を取り出し表示
	*/
	for key, value := range prefecture {
		fmt.Printf("県名 = %s、人口 = %f 万人\n", key, value)
	}
}
