# 指定された半径の円筒の体積をもとめる関数を返す高階関数の定義
'''
関数シグニチャ
    関数名：generate_cylinder_func
    引数：r: float（円筒の半径）
    処理：引数で指定された半径の円筒の体積をもとめる関数を返す
    戻り値：関数
'''


def generate_cylinder_func(r: float):
    def calc(height):
        return r**2 * 3.14 * height
    return calc


# 半径１０の円筒の体積をもとめる関数を変数 func_rad_10に代入
func_rad_10 = generate_cylinder_func(10)

# 半径２０の円筒の体積をもとめる関数を変数 func_rad_20に代入
func_rad_20 = generate_cylinder_func(20)

# 半径５０の円筒の体積をもとめる関数を変数 func_rad_50に代入
func_rad_50 = generate_cylinder_func(50)

# キーボードから高さを入力しそれぞれの半径の円筒の体積をもとめて表示
# 高さの入力
# height = float(input('高さ = '))
height = 45.6

# 半径１０の円筒の体積を表示
print(func_rad_10(height))

# 半径２０の円筒の体積を表示
print(func_rad_20(height))

# 半径５０の円筒の体積を表示
print(func_rad_50(height))
