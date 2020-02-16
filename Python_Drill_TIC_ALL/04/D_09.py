

# リストの要素を検索する関数
# list_search(list, element) の定義
def list_search(list, element):
    # リストの要素数分繰り返す
    # for value in ___ア___:
    for value in list:
        # リストに要素が存在するか？
        # if ___イ___:
        if element == value:
            # 存在する
            return True
            # 存在しない
    return False


# リストの初期化
list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
# 検索する要素を入力
element = int(input('整数値を入力：'))
# リストに入力した整数値があるか否かを判断
# if ___ウ___:
if list_search(list, element):
    print(list, 'に', element, 'が存在する。')
else:
    print(list, 'に', element, 'は存在しない。')
