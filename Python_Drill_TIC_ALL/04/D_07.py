

# リストの要素の長さを返す関数
# my_len(list) の定義
def my_len(list):
    # 長さの初期化
    length = 0
    # for element in ___ア___:
    for element in list:
        # length をインクリメント
        # ___イ___
        length += 1
    # ___ウ___
    return length


# リストの初期化
list1 = [1, 2, 3, 4, 5]
list2 = []
list3 = ['apple', 'orange', 'grape']
list4 = [1, 'apple', 3.14, 'PAI']
# リストの長さを表示
# print(list1, 'の長さは、', ___エ___)
print(list1, 'の長さは、', my_len(list1))
# print(list2, 'の長さは、', ___オ___)
print(list2, 'の長さは、', my_len(list2))
# print(list3, 'の長さは、', ___カ___)
print(list3, 'の長さは、', my_len(list3))
# print(list4, 'の長さは、', ___キ___)
print(list4, 'の長さは、', my_len(list4))
