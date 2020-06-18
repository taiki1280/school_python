package main

import "fmt"

// Health 構造体
// height 身長 float64
// weight 体重 float64
type Health struct {
	height float64
	weight float64
}

// BMIの計算メソッド
func (data Health) bmi() float64 {
	return data.weight / ((data.height / 100) * (data.height / 100))
}

// 適性体重の計算メソッド
func (data Health) suitableWeight() float64 {
	return (data.height / 100) * (data.height / 100) * 22
}

// BMI値より肥満度を判定するメソッド
func (data Health) obesity() string {
	bmi := data.bmi()
	if bmi >= 40 {
		return "肥満(４度)"
	} else if bmi >= 35 {
		return "肥満(３度)"
	} else if bmi >= 30 {
		return "肥満(２度)"
	} else if bmi >= 25 {
		return "肥満(１度)"
	} else if bmi >= 18.5 {
		return "普通体重"
	} else {
		return "低体重(痩せ型)"
	}
}

func main() {
	var data Health
	fmt.Print("身長（ｃｍ単位） = ")
	fmt.Scanln(&data.height)
	fmt.Print("体重（ｋｇ単位） = ")
	fmt.Scanln(&data.weight)
	fmt.Printf("身長 = %f\n", data.height)
	fmt.Printf("体重 = %f\n", data.weight)
	fmt.Printf("BMI値 = %f\n", data.bmi())
	fmt.Printf("適性体重 = %f\n", data.suitableWeight())
	fmt.Printf("肥満度判定 = %s\n", data.obesity())
}
