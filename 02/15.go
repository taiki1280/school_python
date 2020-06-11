/**可変長パラメータ複数の数値の合計をもとめる*/
/**関数variableAddCalcの定義関数シグニチャ関数名：variableAddCalc引数：data：可変の整数値（型int）処理：可変個整数値の合計をもとめる戻り値：合計値（型int）*/

package main

import "fmt"

func variableAddCalc(datas ...int) int {
	fmt.Println(datas)
	value := 0
	for i := range datas {
		value += i
		fmt.Println(i)
		fmt.Println(value)
	}
	return value
}

func main() {
	//可変個整数値の合計を表示
	// fmt.Println("1+2=",＿＿＿（１）＿＿＿)
	fmt.Println("1+2=", variableAddCalc(1, 2))
	// fmt.Println("10+20+30=",＿＿＿（１）＿＿＿)}
	// fmt.Println("10+20+30=",＿＿＿（１）＿＿＿)
}
