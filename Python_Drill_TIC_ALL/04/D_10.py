# 奇数値を要素とするリストを返す関数
# create_odd_list(list) の定義


def create_odd_list(list):
    # 奇数値リストの初期化
    odd_list = []
    # リストの要素数分繰り返す
    # for element in ___ア___:
    for element in list:
        # 奇数か否かを判定
        # if ___イ___:
        if bool(element % 2):
            # 奇数なら奇数値リストに要素を追加
            # ___ウ___
            odd_list += [element]
    # 奇数値リストを返す
    # ___エ___
    return odd_list


# リストを初期化
list = [10, 11, 12, 30, 33, -55, 14, 22, 90, 89]
# リスト全体の表示
print('元のリストは', list)
# 奇数値のリストを表示
# print('奇数値のリストは', ___オ___)
print('奇数値のリストは', create_odd_list(list))
