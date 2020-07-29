# 偶数値のリストと奇数値のリストをタプルにして返す関数
# create_even_odd_list(list) の定義


def create_even_odd_list(list):
    # 偶数値リストと奇数値リストの初期化
    even_list = []
    odd_list = []
    # リストの要素数分繰り返す
    # for element in ___ア___:
    for element in list:
        # 偶数か奇数かを判断
        # if ___イ___:
        if bool(element % 2) == False:
            # 要素が偶数
            # ___ウ___
            even_list += [element]
        else:
            # 要素が奇数
            # ___エ___
            odd_list += [element]
    # 偶数値リストと奇数値リストのタプルを返す
    # ___オ___
    return (even_list, odd_list)


# リストを初期化
list = [10, 11, 12, 30, 33, -55, 14, 22, 90, 89]
# リスト全体の表示
print('元のリストは', list)
# 偶数値リストと奇数値リストを求める
# result = ___カ___
result = create_even_odd_list(list)
# 偶数値リストを表示
# print('偶数値リストは', ___キ___)
print('偶数値リストは', result[0])
# 奇数値リストを表示
# print('奇数値リストは', ___ク___)
print('奇数値リストは', result[1])
