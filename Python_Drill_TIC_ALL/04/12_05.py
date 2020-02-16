# 負の整数が入力されるまで
# 整数値を入力し、合計と平均を表示
# 合計と平均の初期化
total = 0
average = 0
# 無限ループ
# カウンターの初期化
number = 0
# while ___ア___:
while True:
    # 入力促進文字列の生成
    prompt = '{}件目：入力 = '.format(number+1)
    # 整数値を入力
    input_data = int(input(prompt))
    # 負の整数値かどうかを判定
    # if ___イ___:
    if input_data < 0:
        # 無限ループから抜ける
        # ___ウ___
        break

    # 合計を計算
    # ___エ___
    total += input_data

    # カウンタをインクリメント
    # ___オ___
    number += 1

    # 平均値を求める
    # average = ___カ___
average = total / number
# 合計と平均を表示
print('合計 = {}、平均 = {}'.format(total, average))
