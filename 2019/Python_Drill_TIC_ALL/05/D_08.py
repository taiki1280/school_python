

# 数値リストの合計を計算する関数
# list_sum(list) の定義
def list_sum(list):
    # 合計の初期化
    total = 0
    # リストの要素数分繰り返す
    # for element in ___ア___:
    for element in list:
        # 合計を求める
        # ___イ___
        total += element
    # 合計を返す
    # ___ウ___
    return total


# リストの初期化
list = [1, 2, 3.3, 4.4, 5]
# 合計を計算し表示
# print(list, 'の要素の合計は', ___エ___)
print(list, 'の要素の合計は', list_sum(list))
