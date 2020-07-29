# 開始数と終了数間の整数の合計値を求める
# 開始数を入力
start_num = int(input('開始数 = '))
# 終了数を入力
end_num = int(input('終了数 = '))
# 合計値を初期化
total = 0
# カウンタを初期化
count = start_num
# 開始数から終了数まで繰り返す
# while ___ア___:
while count <= end_num:
    # 合計値を求める
    # ___イ___
    total += count
    # カウンタをインクリメント
    # ___ウ___
    count += 1

# テンプレート文字列の作成
# .___エ___
tpl = '{}から{}までの合計値 = {}'.format(start_num, end_num, total)
# 合計を表示
print(tpl)
