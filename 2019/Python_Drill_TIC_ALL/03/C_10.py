# 辞書
# 個人情報の入力と表示および平均年齢の計算と表示
# 個人情報辞書の初期化
person = {}
# 入力件数を入力
number = int(input('入力件数 = '))
# 入力件数分繰り返す
# for ___ア___:
for count in range(1, number + 1):
    print('{}件目の個人情報入力'.format(count))
    # 名前の入力
    name = input('名前 = ')
    # 年齢の入力
    age = int(input('年齢 = '))
    # 個人情報辞書に名前と年齢を追加
    # ___イ___
    person[name] = age
# 合計と平均を初期化
total = 0
average = 0
# 入力した個人情報と平均年齢を表示
for key in person:
    # 合計を計算
    total += person[key]
    print('名前：{}、年齢：{}'.format(key, person[key]))
# 平均年齢の計算
# average = ___カ___
average = total / len(person)
# 平均年齢を表示
print('平均年齢は{}歳です。'.format(average))
