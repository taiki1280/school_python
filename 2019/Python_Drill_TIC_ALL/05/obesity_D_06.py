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
