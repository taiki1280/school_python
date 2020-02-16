# BMI 値と適正体重を計算する関数
# BMI 値を計算する関数
# calc_bmi(weight, height) の定義


def calc_bmi(weight, height):
    # bmi = ___ア___
    bmi = weight / (height ** 2)
    # ___イ___
    return bmi

# 適正体重を計算する関数
# calc_proper_weight(height) の定義


def calc_proper_weight(height):
    # proper_weight = ___ウ___
    proper_weight = height ** 2 * 22
    # ___エ__
    return proper_weight


# 身長と体重を入力
# weight = ___オ___(input('体重(kg) = '))
weight = float(input('体重(kg) = '))
# height = ___オ___(input('身長(cm) = '))
height = float(input('身長(cm) = '))
# 身長(cm)をメートルに換算
height /= 100
# 関数を呼び出し、BMI 値を計算
# bmi = ___カ___
bmi = calc_bmi(weight, height)
# 関数を呼び出し、適正体重を計算
# proper_weight = ___キ___
proper_weight = calc_proper_weight(height)
# 表示用テンプレートの作成
result_bmi = ' 身 長 ： {} 、 体 重 ： {} の BMI 値 は {} で す 。' .format(
    height, weight, bmi)
# .format(weight, height, bmi)
result_proper_weight = '適正体重は {}kg です。'.format(proper_weight)
# 表示
print(result_bmi)
print(result_proper_weight)
