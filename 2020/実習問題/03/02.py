# １００ら１１０までのリストを生成し、変数 list_data に代入
list_data = list(range(100, 110 + 1))

# リストの各要素に演算を施す高階関数の定義
'''
関数シグニチャ
    関数名：list_calc
    引数：
        list_data: []（演算対象となるリスト）
        operand: int（リストの要素にたいして演算する数値）
        f: 'function'（リストの要素に施す演算を行う関数）
    処理：
        指定されたリストの各要素に指定された数値に対して、指定された関数による演算を施したリストを返す。
    戻り値：生成されたリスト
'''


def list_calc(list_data: [], operand: int, f: 'function'):
    for i, v in enumerate(list_data):
        list_data[i] = f(v, operand)
    return list_data


# 演算前のリスト全体を表示
print('演算前のリスト = ', list_data)

# リストの各要素に対して指定された数値をラムダ式で記述された演算を施す
# リストの各要素に10を足したリストを生成する
add_list = list_calc(list_data.copy(), 10, lambda x, op: x + op)

# 表示
print('各要素に１０を足したリスト = ', add_list)

# リストの各要素から１０を引いたリストを生成する
sub_list = list_calc(list_data.copy(), 10, lambda x, op: x - op)

# 表示
print('各要素から１０を引いたリスト = ', sub_list)

# リストの各要素に１０をかけたリストを生成する
mul_list = list_calc(list_data.copy(), 10, lambda x, op: x * op)

# 表示
print('各要素に１０をかけたリスト = ', mul_list)

# リストの各要素を１０でわったリストを生成する
div_list = list_calc(list_data.copy(), 10, lambda x, op: int(x / op))

# 表示
print('各要素を１０でわったリスト = ', div_list)

# リストの各要素を１０でわった余りのリストを生成する
mod_list = list_calc(list_data.copy(), 10, lambda x, op: int(x % op))

# 表示
print('各要素を１０でわった余りリスト = ', mod_list)