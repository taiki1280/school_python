# 指定した数のデータを入力し
# 入力したデータの合計、平均を求めて画面に表示する。

# データ入力件数を入力
number = int(input("入力データ件数："))

# データ入力件数分の数値の合計を求める
# 合計地の初期化
total = 0
# 平均値の初期化
average = 0
for value in range(1, number + 1):
    prompt = "{}件目のデータを入力：".format(value)
    data = int(input(prompt))
    total += data
average = total / number

print("合計={}、平均={}".format(total, average))
