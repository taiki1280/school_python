package main

import "fmt"

/**
  Person型構造体の定義
  フィールド
    name　名前（型 string）
    age　年齢（型 byte）
*/

// Person 構造体
type Person struct {
	name string
	age  byte
}

func main() {
	/**
	  Person型構造体配列 basicDataの宣言と初期化
	  配列名：basicData
	  型：Person
	  要素数：３
	  初期化値：
	    "鈴木一朗", 38
	    "広瀬すず", 22
	    "土方歳三", 36
	*/

	basicData := [3]Person{
		{name: "鈴木一郎", age: 38},
		{name: "広瀬すず", age: 22},
		{name: "土方歳三", age: 36},
	}

	// Person型構造体配列 basicData の要素をすべて表示
	for _, value := range basicData {
		fmt.Printf("氏名；%s、年齢：%d\n", value.name, value.age)
	}

}
