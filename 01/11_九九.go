package main

func main() {
	// 外ループ
	for i := 1; i <= 9; i++ {
		// 内ループ
		for j := 1; j <= 9; j++ {
			// 桁を合わせる為の空白
			if i*j < 10 {
				print(" ")
			}
			print(i * j)
			print(" ")
		}
		// 倍数毎に改行
		print("\n")
	}
}
