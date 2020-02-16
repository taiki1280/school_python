# 辞書
# 個人情報の入力とファイルへの出力
# 出力するファイルのファイル名を入力
file_name = input('ファイル名：')
# 指定したファイルを追加モードでオープン
# write_file = open(___ア___, ___イ___)
write_file = open(file_name, "a")
# 個人情報辞書の初期化
person = {}
# 入力件数を入力
number = int(input('入力件数 = '))
# 入力件数分繰り返す
# for ___ウ___:
for count in range(1, number + 1):
    print('{}件目の個人情報入力'.format(count))
    # 名前の入力
    name = input('名前 = ')
    # 年齢の入力
    age = int(input('年齢 = '))
    # 個人情報辞書に名前と年齢を追加
    # ___エ___
    person[name] = age
    # 入力した個人情報を指定されたファイルに書き出す
# for ___オ___:
for key in person:
    # 辞書の個人情報を整形
    # person_data = '名前：{}、年齢：{}'.format(key, ___カ___)
    person_data = '名前：{}、年齢：{}'.format(key, person[key])
    # ファイルに書き出す
    # write_file.___キ___(person_data + '¥n')
    write_file.write(person_data + '\n')
# ファイルをクローズ
# write_file.___ク___
write_file.close()
