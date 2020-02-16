# 整数値のリストから最大値を削除
# 整数値リストを初期化
num_list = [10, 20, 33, 55, 60, 79, 79, 14]
# 初期化後のリストの表示
print('最初のリスト = ', num_list)
# 最大値の初期化
max = num_list[0]
# リストのインデックスの初期化
index = 1
# 整数値リストの要素数分繰り返す
while index <= len(num_list) - 1:
    # 最大値を求める
    if max < num_list[index]:
        max = num_list[index]
    # インデックスのインクリメント
    index += 1
# リストから最大値を削除
num_list.remove(max)
# 最大値を削除したリストの表示
print('最大値削除後のリスト = ', num_list)
