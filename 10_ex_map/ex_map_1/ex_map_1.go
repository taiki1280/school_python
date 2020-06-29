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
	マップにキーとなる県名と、バリューである人口を代入
	*/

	// ＿＿＿＿＿（２）＿＿＿＿＿ // 青森県、124.9
	prefecture["青森県"] = 124.9
	// ＿＿＿＿＿（３）＿＿＿＿＿ // 岩手県、122.9
	prefecture["岩手県"] = 122.9
	// ＿＿＿＿＿（４）＿＿＿＿＿    // 秋田県、96.6
	prefecture["秋田県"] = 96.9
	// ＿＿＿＿＿（５）＿＿＿＿＿ // 宮城県、230.6
	prefecture["宮城県"] = 230.6
	// ＿＿＿＿＿（６）＿＿＿＿＿ // 山形県、108.0
	prefecture["山形県"] = 108.0
	// ＿＿＿＿＿（７）＿＿＿＿＿ // 福島県、184.4
	prefecture["福島県"] = 184.4

	/**
	for-range文を使用して、mapから県名と人口を取り出し表示
	*/
	for key, value := range prefecture {
		fmt.Printf("県名 = %s、人口 = %f 万人\n", key, value)
	}

}
