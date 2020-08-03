# １から５０までの数値のリストを生成し変数list_dataに代入
list_data = list(range(1, 50 + 1))

# 下限値を入力し変数downに代入
# down = int(input('下限値 = '))
down = 20


# 上限値を入力し変数upに代入
# up = int(input('上限値 = '))
up = 10

# 指定された下限値と上限値に対して、指定された関数を適用し
# リストを抽出したリストを生成し返す高階関数の定義
'''
関数シグニチャ
    関数名：list_filter
    引数：
        list_data: []（抽出対象となるリスト）
        down: int（下限値）
        up: int（上限値）
        f: 'function'（抽出判定するための関数）
    処理：
        指定された上限値と下限値に対して、抽出判定するための関数を適用してリストを抽出する
    戻り値：抽出されたリスト
'''


def list_filter(list_data: [], down: int, up: int, f: 'function'):
    result_list = []
    for num in list_data:
        if (f(num, down, up)):
            result_list += [num]
    return result_list


# 抽出するための関数の定義
'''
関数シグニチャ
    関数名：is_limit
    引数：
        number: int（抽出対象となる数値）
        down: int（下限値）
        up: int（上限値）
    処理：
        numberがdown以上、up以下ならTrueを返す
    戻り値：bool
'''


def is_limit(number: int, down: int, up: int):
    if down <= number <= up:
        return True
    return False


# 抽出前のリストを表示
print('抽出前のリスト = ', list_data)

# 高階関数 list_filter を呼んでリストを抽出し変数result_listに代入
result_list = list_filter(list_data.copy(), down, up, is_limit)

# 抽出後のリストを表示
print('抽出後のリスト = ', result_list)