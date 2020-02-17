# 肥満度を判断する
# BMI 値と適正体重を計算する関数をインポート
# from obesity import ___ア___
from obesity_D_06 import calc_bmi, calc_proper_weight
# 身長と体重を入力
# weight = ___イ___(input('体重(kg) = '))
weight = float(input('体重(kg) = '))
# height = ___イ___(input('身長(cm) = '))
height = float(input('身長(cm) = '))
# 身長(cm)をメートルに換算
height /= 100
# 関数を呼び出し、BMI 値を計算
# bmi = ___ウ___
bmi = calc_bmi(weight, height)
# 関数を呼び出し、適正体重を計算
# proper_weight = ___エ___
proper_weight = calc_proper_weight(weight)
# 肥満度判定結果を初期化
degree_of_obesity = ''
# 肥満度を判定
# if ___オ___:
if 40.00 <= bmi:
    degree_of_obesity = '肥満（３度）'
# elif ___カ___:
elif 35.00 <= bmi and bmi <= 39.99:
    degree_of_obesity = '肥満（２度）'
# elif ___キ___:
elif 30.00 <= bmi and bmi <= 34.99:
    degree_of_obesity = '肥満（１度）'
# elif ___ク___:
elif 25.00 <= bmi and bmi <= 29.99:
    degree_of_obesity = '前肥満'
# elif ___ケ___:
elif 18.50 <= bmi and bmi <= 24.99:
    degree_of_obesity = '普通体重'
# elif ___コ___:
elif 17.00 <= bmi and bmi <= 18.49:
    degree_of_obesity = '痩せぎみ'
# elif ___サ___:
elif 16.00 <= bmi and bmi <= 16.99:
    degree_of_obesity = '痩せ'
else:
    degree_of_obesity = '痩せすぎ'
# 結果の表示
# 表示用テンプレートの作成
result_bmi = ' 身 長 ： {} 、 体 重 ： {} の BMI 値 は {} で す 。'.format(
    # weight, height, bmi)
    height, weight, bmi)
result_proper_weight = '適正体重は {}kg です。'.format(proper_weight)
result_obesity = 'あなたは、{} です。'.format(degree_of_obesity)
# 表示
print(result_bmi)
print(result_proper_weight)
print(result_obesity)
