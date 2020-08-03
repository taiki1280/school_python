# randomパッケージをインポート
import random

# １から１０までの範囲の乱数のリスト（要素数１０）を生成
list_data = [random.randrange(10) for _ in range(10)]

# リストの合計を求める関数 sum_list を返す高階関数の定義
'''
関数シグニチャ
    関数名：generate_func
    引数：なし
    処理：
        リストの要素の合計を求める関数を返す
    戻り値：
        リストの要素の合計を求める関数
'''

def generate_func():
    def sum_list(list_data):
        result = 0
        for v in list_data:
            result += v
        return result
    return sum_list


# 計算対象のリストを表示
print('計算対象のリスト = ', list_data)

# 高階関数 generate_func を呼び出しリストの合計を求める関数を
# を生成して変数 func に代入
func = generate_func()

# 生成された関数を使用してリストの合計値をもとめて表示
print(func(list_data))