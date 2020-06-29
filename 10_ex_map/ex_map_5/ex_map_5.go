package main

import "fmt"

func main() {
	/**
	変数 prefecture にマップを初期化する
	マップの型
	キー　（型 string）県名
	バリュー（型 float64）人口
	初期化するキーとバリュー
	県名    人口
	青森県 124.9
	岩手県 122.9
	秋田県 96.6
	宮城県 230.6
	山形県 108.0
	福島県 184.8
	*/

	prefecture := map[string]float64{
		"青森県": 124.9,
		"岩手県": 122.9,
		"秋田県": 96.6,
		"宮城県": 230.6,
		"山形県": 108.0,
		"福島県": 184.8,
	}

	/**
	for-range文を使用して、mapから県名と人口を取り出し表示
	*/

	for key, value := range prefecture {
		fmt.Printf("県名 = %s、人口 = %f 万人\n", key, value)
	}

	// 存在を確認したい県名をキーボードから入力
	var key string
	fmt.Print("確認したい県 = ")
	fmt.Scanln(&key)

	// 確認した意見がマップ prefecture に存在するか否かを判断
	_, ok := prefecture[key]
	// fmt.Printf("%sは存在", _)
	if ok {
		fmt.Printf("します")
	} else {
		fmt.Printf("しません")
	}
}
