# 辞書
# 個人情報の入力と表示
# 個人情報辞書の初期化
person = {}
# 入力件数を入力
number = int(input('入力件数 = '))
# 入力件数分繰り返す
# for ___ア___:
for count in range(number):
    print('{}件目の個人情報入力'.format(count + 1))
    # 名前の入力
    name = input('名前 = ')
    # 年齢の入力
    age = int(input('年齢 = '))
    # 個人情報辞書に名前と年齢を追加
    # ___イ___
    person[name] = age


# 入力した個人情報を表示
for key in person:
    # print('名前：{}、年齢：{}'.format(___ウ___))
    print('名前：{}、年齢：{}'.format(key, person[key]))
