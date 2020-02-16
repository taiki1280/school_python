# 整数値のリストを降順にソートする
# 整数値のリストを初期化
num_list = [10, -10, 40, -15, 90, 15, -80]
# ソート前のリストを表示
print('ソート前 = ', num_list)
# for index1 in ___ア___:
for index1 in range(0, len(num_list) - 1):
    # for index2 in ___イ___:
    for index2 in range(index1 + 1, len(num_list) - 1):
        # 後のリストの要素との比較
        # if ___ウ___:
        if num_list[index1] < num_list[index2]:
            # 後のリスト要素が大きければ前のリスト要素と入れ替え
            temp = num_list[index1]
            # ___エ___
            num_list[index1] = num_list[index2]
            num_list[index2] = temp
# 降順ソート後のリストを表示
print('降順ソート後 = ', num_list)
