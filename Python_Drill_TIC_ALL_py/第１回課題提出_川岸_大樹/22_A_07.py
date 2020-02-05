""" 最終的な答え """
# BMI 値を求める
# キーボードから体重（Kg 単位）を入力し浮動小数点に変換
weight = float(input("体重(Kg)を入力："))
# キーボードから身長（cm 単位）を入力し浮動小数点に変換
height_cm = float(input("身長(cm)を入力"))
# 身長をメートルに換算
height = height_cm / 100
# BMI 値を計算
bmi = weight / height ** 2
# 入力した体重を表示
print("体重 = " + str(weight) + "Kg")
# 入力した身長を表示
print("身長 = " + str(height) + "Kg")
# BMI 値を表示
print("BMI値 = " + str(bmi))
