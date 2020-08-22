# 数値リストを対象とする高階関数による処理
# map 関数

# 元の数値リスト
number_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]


# ２乗する関数の定義
def power(x: int) -> int:
    return x * x


# ３乗する関数の定義
def power3(x: int) -> int:
    return x * x * x


'''
数値リストと、数値リストの要素に対して
何らかの処理をする関数を引数とする高階関数の定義 
'''


def my_map(list: [], f: 'function') -> []:
    '''
    リスト内包表記を使用して、数値リストの各要素に対し
    引数として指定された関数を適用して数値のリストを生成し
    そのリストを返す
    '''
    return [f(val) for val in list]


# 数値リストに対し、高階関数を適用して新たなリストを生成し表示
print('元のリスト = ', number_list)
# 数値リストの各要素を２乗した数値リストの生成と表示
print('要素を２乗したリスト = ', my_map(number_list, power))
# 数値リストの各要素を３乗した数値リストの生成と表示
print('要素を３乗したリスト = ', my_map(number_list, power3))