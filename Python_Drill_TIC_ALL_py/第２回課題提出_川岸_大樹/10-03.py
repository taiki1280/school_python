# キーボード空の正の数値ｎを入力し
# １～ｎまでの総和を求める

# 最大値を入力
count = int(input("最大値："))

# １から最大値を入力
# 合計地を初期化
total = 0
for value in range(1, count + 1):
    total += value
# 合計結果を表示
# テンプレートを作成
tpl = "１から{}までの合計は、{}です。"
print(tpl.format(count, total))
